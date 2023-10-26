<?php

namespace Alipay\OpenAPISDK\Util;

use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Util\Model\AlipayConfig;

class AlipayConfigUtil
{
    /**
     * 网关地址
     */
    private $serverUrl;

    /**
     * 开放平台上创建的应用的ID
     */
    private $appId;

    /**
     * 商户私钥
     */
    private $privateKey;

    /**
     * 私钥文件路径，该字段与$privateKey只需指定一个，优先以该字段的值为准
     */
    private $privateKeyFilePath;

    /**
     * 支付宝公钥字符串（公钥模式下设置，证书模式下无需设置）
     */
    private $alipayPublicKey;

    /**
     * 支付宝公钥文件路径，该字段与$alipayPublicKey只需指定一个，优先以该字段的值为准
     */
    private $alipayPublicKeyFilePath;

    /**
     * 支付宝根证书序列号
     */
    private $rootCertSN;

    /**
     * 支付宝根证书内容
     */
    private $rootCertContent;

    /**
     * 商户应用公钥证书序列号
     */
    private $appCertSN;

    /**
     * 缓存的不同支付宝公钥证书序列号对应的支付宝公钥
     */
    private $cachedAlipayPublicKey = array();

    /**
     * 敏感信息对称加密算法类型，推荐：AES
     */
    private $encryptType = "AES";

    /**
     * 敏感信息对称加密算法密钥
     */
    private $encryptKey;

    /**
     * 报文格式，推荐：json
     */
    private $format = "json";

    /**
     * 字符串编码，推荐：utf-8
     */
    private $charset = "utf-8";

    /**
     * 签名算法类型，推荐：RSA2
     */
    private $signType = "RSA2";

    public function __construct()
    {
        if (func_num_args() == 1 && func_get_arg(0) instanceof AlipayConfig) {
            $alipayConfig = func_get_arg(0);
            $this->serverUrl = $alipayConfig->getServerUrl();
            $this->appId = $alipayConfig->getAppId();
            if (!$this->checkEmpty($alipayConfig->getPrivateKey())) {
                //读字符串
                $priKey = $alipayConfig->getPrivateKey();
                $this->privateKey = "-----BEGIN RSA PRIVATE KEY-----\n" .
                    wordwrap($priKey, 64, "\n", true) .
                    "\n-----END RSA PRIVATE KEY-----";
            }
            $this->privateKeyFilePath = $alipayConfig->getPrivateKeyFilePath();

            if (!$this->checkEmpty($alipayConfig->getAlipayPublicKey())) {
                //读取字符串
                $pubKey = $alipayConfig->getAlipayPublicKey();
                $this->alipayPublicKey = "-----BEGIN PUBLIC KEY-----\n" .
                    wordwrap($pubKey, 64, "\n", true) .
                    "\n-----END PUBLIC KEY-----";
            }
            $this->alipayPublicKeyFilePath = $alipayConfig->getAlipayPublicKeyFilePath();

            $this->encryptType = $alipayConfig->getEncryptType();
            $this->encryptKey = $alipayConfig->getEncryptKey();

            //公钥证书未设置，提前返回，跳过后续证书初始化内容
            if ($this->checkEmpty($alipayConfig->getAlipayPublicCertContent()) && $this->checkEmpty($alipayConfig->getAlipayPublicCertPath())) {
                return;
            }
            // 优先从Content字段获取内容, content 未设置内容则从文件路径中读取内容
            //读取根证书
            $this->rootCertContent = !$this->checkEmpty($alipayConfig->getRootCertContent())
                ? $alipayConfig->getRootCertContent() : file_get_contents($alipayConfig->getRootCertPath());
            $this->rootCertSN = AntCertificationUtil::getRootCertSN($this->rootCertContent);

            //获取应用证书
            $appCertContent = !$this->checkEmpty($alipayConfig->getAppCertContent())
                ? $alipayConfig->getAppCertContent() : file_get_contents($alipayConfig->getAppCertPath());
            $this->appCertSN = AntCertificationUtil::getCertSN($appCertContent);

            //获取支付宝公钥证书
            $alipayPublicContent = !$this->checkEmpty($alipayConfig->getAlipayPublicCertContent())
                ? $alipayConfig->getAlipayPublicCertContent() : file_get_contents($alipayConfig->getAlipayPublicCertPath());
            //alipayCertSN为支付宝公钥证书序列号
            $alipayCertSN = AntCertificationUtil::getCertSN($alipayPublicContent);
            $pubKey = AntCertificationUtil::getPublicKey($alipayPublicContent);
            $this->cachedAlipayPublicKey[$alipayCertSN] = "-----BEGIN PUBLIC KEY-----\n" .
                wordwrap($pubKey, 64, "\n", true) .
                "\n-----END PUBLIC KEY-----";
        }
    }


    /**
     * 计算签名并添加header
     *
     * @param $httpMethod
     * @param $httpRequestUri
     * @param $httpRequestBody
     * @param $headerParams
     */
    public function sign($httpMethod, $httpRequestUri, $httpRequestBody, &$headerParams)
    {
        $appAuthToken = $this->getHeadersValue($headerParams, 'alipay-app-auth-token');
        $nonce = $this->createUuid();
        $timestamp = $this->getCurrentMilis();
        $authString = 'app_id=' . $this->appId
            . ($this->checkEmpty($this->appCertSN) ? '' : ',app_cert_sn=' . $this->appCertSN)
            . ',nonce=' . $nonce
            . ',timestamp=' . $timestamp;
        $content = $authString . "\n"
            . $httpMethod . "\n"
            . $httpRequestUri . "\n"
            . ($this->checkEmpty($httpRequestBody) ? '' : $httpRequestBody) . "\n"
            . ($this->checkEmpty($appAuthToken) ? '' : $appAuthToken . "\n");

        if ($this->isNeedSign()) {
            $headerParams['Authorization'] = 'ALIPAY-SHA256withRSA' . ' ' . $authString . ',sign=' . $this->generateSign($content);
        } else {
            $headerParams['Authorization'] = 'ALIPAY-SHA256withRSA' . ' ' . $authString;
        }
    }

    public function generateSign($content)
    {
        if ($this->checkEmpty($this->privateKeyFilePath)) {
            $res = $this->privateKey;
        } else {
            //读取私钥文件
            $priKey = file_get_contents($this->privateKeyFilePath);
            $res = openssl_get_privatekey($priKey);
        }

        if (!$res) {
            throw new ApiException('您使用的私钥格式错误，请检查RSA私钥配置', 400);
        }
        //只支持RSA2
        openssl_sign($content, $sign, $res, OPENSSL_ALGO_SHA256);
        if (!$this->checkEmpty($this->privateKeyFilePath)) {
            openssl_free_key($res);
        }
        return base64_encode($sign);
    }

    /**
     * @param $content        string 待验签的内容
     * @param $sign           string 签名值的Base64串
     * @param $alipayCertSN   string 支付宝公钥证书序列号
     * @param $timestamp      string 时间戳
     * @param $nonce          string nonce
     * @return bool           true：验证成功；false：验证失败
     * @throws ApiException
     */
    public function verify($content, $sign, $alipayCertSN, $timestamp, $nonce)
    {
        if (!$this->checkEmpty($this->appCertSN)) {
            //证书模式
            $res = $this->getAlipayPublicKeyWithSN($alipayCertSN);
        } else if ($this->checkEmpty($this->alipayPublicKeyFilePath)) {
            $res = $this->alipayPublicKey;
        } else {
            //读取公钥文件
            $pubKey = file_get_contents($this->alipayPublicKeyFilePath);
            //转换为openssl格式密钥
            $res = openssl_get_publickey($pubKey);
        }

        if (!$res) {
            if (!$this->isNeedSign()) {
                return true;
            }
            throw new ApiException('支付宝RSA公钥错误。请检查公钥文件格式是否正确', 400);
        }

        $content = $timestamp . "\n"
            . $nonce . "\n"
            . ($this->checkEmpty($content) ? "" : $content) . "\n";
        //调用openssl内置方法验签，返回bool值
        $result = FALSE;
        $result = (openssl_verify($content, base64_decode($sign), $res, OPENSSL_ALGO_SHA256) === 1);
        if ($this->checkEmpty($this->appCertSN) && !$this->checkEmpty($this->alipayPublicKeyFilePath)) {
            //释放资源
            openssl_free_key($res);
        }
        return $result;
    }

    /**
     * 是否需要携带签名参数（未配置私钥参数时则不需要携带）
     *
     * @return bool
     */
    public function isNeedSign()
    {
        if ($this->checkEmpty($this->privateKey) && $this->checkEmpty($this->privateKeyFilePath)) {
            return false;
        }
        return true;
    }

    /**
     * 是否需要加密
     *
     * @return bool
     * @throws ApiException
     */
    public function isEncrypt()
    {
        if ($this->checkEmpty($this->encryptKey)) {
            return false;
        }
        if ("AES" !== $this->encryptType) {
            throw new ApiException("当前不支持该算法类型：encryptType=" . $this->encryptType, 400);
        }
        return true;
    }

    /**
     * AES加密
     *
     * @param $plainText    String 明文
     * @param $headerParams
     * @param false $multipart
     * @return mixed|string
     * @throws ApiException
     */
    public function encrypt($plainText, &$headerParams, $multipart = false)
    {
        if (!$this->isEncrypt()) {
            return $plainText;
        }

//        $headerParams['alipay-encrypt-type'] = $this->encryptType;
//        //除文件上传接口，加密后Content-Type均为"text/plain"
//        if (!$multipart) {
//            $headerParams['Content-Type'] = 'text/plain';
//        }
        if ($this->checkEmpty($plainText)) {
            return null;
        }
        if (!is_scalar($plainText)) {
            echo "plainText类型为" . gettype($plainText) . "，不可加密";
            return $plainText;
        }

        try {
            if (strlen($this->encryptKey) == 0) {
                throw new ApiException("AES加密失败，plainText=" . $plainText . "，AES密钥为空。", 400);
            }
            //AES, 128 模式加密数据 CBC
            $screct_key = base64_decode($this->encryptKey);
            $str = trim($plainText);
            $str = $this->addPKCS7Padding($str);
            $iv = str_repeat("\0", 16);
            $encrypt_str = openssl_encrypt($str, 'aes-128-cbc', $screct_key, OPENSSL_NO_PADDING, $iv);

            return base64_encode($encrypt_str);
        } catch (\Exception $e) {
            throw new ApiException("AES加密失败，plainText=" . $plainText . "，keySize=" . strlen($this->encryptKey) . "。" . $e->getMessage(), 400);
        }
    }

    /**
     * AES解密
     *
     * @param $cipherText String 密文
     * @return false|string
     * @throws ApiException
     */
    public function decrypt($cipherText)
    {
        if (!$this->isEncrypt()) {
            return $cipherText;
        }
        if ($this->checkEmpty($cipherText)) {
            return null;
        }
        try {
            if (strlen($this->encryptKey) == 0) {
                throw new ApiException("AES加密失败，plainText=" . $cipherText . "，AES密钥为空。", 400);
            }
            //AES, 128 模式加密数据 CBC
            $str = base64_decode($cipherText);
            $screct_key = base64_decode($this->encryptKey);
            $iv = str_repeat("\0", 16);
            $decrypt_str = openssl_decrypt($str, 'aes-128-cbc', $screct_key, OPENSSL_NO_PADDING, $iv);
            $decrypt_str = $this->stripPKSC7Padding($decrypt_str);
            return $decrypt_str;
        } catch (\Exception $e) {
            throw new ApiException("AES解密失败，cipherText=" . $cipherText . "，keySize=" . strlen($this->encryptKey) . "。" . $e->getMessage(), 400);
        }
    }

    /**
     * 验签
     *
     * @param $respBody
     * @param $headers
     * @param $isCheckSign bool true:检查header中sign存在才验签
     * @throws ApiException
     */
    public function verifyResponse($respBody, $headers, $isCheckSign)
    {
        $sign = $this->getHeadersValue($headers, 'alipay-signature');
        if ($isCheckSign && ($this->checkEmpty($sign) || $sign === 'null')) return;

        $alipayCertSN = $this->getHeadersValue($headers, 'alipay-sn');
        $timestamp = $this->getHeadersValue($headers, 'alipay-timestamp');
        $nonce = $this->getHeadersValue($headers, 'alipay-nonce');
        //验签
        $verify = $this->verify($respBody, $sign, $alipayCertSN, $timestamp, $nonce);
        if (!$verify) {
            throw new ApiException("sign check fail: check Sign and Data Fail! [sign=" . $sign . ", respBody=" . $respBody . "]",
                400,
                $headers,
                $respBody);
        }
    }

    private function getHeadersValue($headers, $key)
    {
        if (!is_array($headers)) return '';
        if (array_key_exists($key, $headers)) {
            $value = $headers[$key];
            if (is_array($value)) {
                if (empty($value)) return '';
                return reset($value);
            } else {
                return $value;
            }
        }
        return '';
    }

    /**
     * @throws ApiException
     */
    private function getAlipayPublicKeyWithSN($sn)
    {
        //如果没有指定sn，则默认取缓存中的第一个值
        if ($this->checkEmpty($sn)) {
            if (empty($this->cachedAlipayPublicKey)) return '';
            return reset($this->cachedAlipayPublicKey);
        }
        if (array_key_exists($sn, $this->cachedAlipayPublicKey)) {
            return $this->cachedAlipayPublicKey[$sn];
        } else {
            throw new ApiException("支付宝公钥证书[" . $sn . "]已过期，请重新下载最新支付宝公钥证书并替换原证书文件", 400);
        }
    }

    /**
     * 填充算法
     * @param string $source
     * @return string
     */
    private function addPKCS7Padding($source)
    {
        $source = trim($source);
        $block = 16;

        $pad = $block - (strlen($source) % $block);
        if ($pad <= $block) {
            $char = chr($pad);
            $source .= str_repeat($char, $pad);
        }
        return $source;
    }

    /**
     * 移去填充算法
     * @param string $source
     * @return string
     */
    private function stripPKSC7Padding($source)
    {
        $char = substr($source, -1);
        $num = ord($char);
        if ($num == 62) return $source;
        $source = substr($source, 0, -$num);
        return $source;
    }

    /**
     * 校验$value是否非空
     *
     * @param $value
     * @return bool if not set ,return true;if is null , return true;
     */
    function checkEmpty($value)
    {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (trim($value) === "")
            return true;
        return false;
    }

    /**
     * 生成UUID
     *
     * @return string
     */
    function createUuid()
    {
        $chars = md5(uniqid(mt_rand(), true));
        return substr($chars, 0, 8) . '-'
            . substr($chars, 8, 4) . '-'
            . substr($chars, 12, 4) . '-'
            . substr($chars, 16, 4) . '-'
            . substr($chars, 20, 12);
    }

    /**
     * 获取时间戳（毫秒）
     *
     * @return string
     */
    public function getCurrentMilis()
    {
        $timeInfo = explode(' ', microtime());
        return sprintf('%d%03d', $timeInfo[1], $timeInfo[0] * 1000);
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return mixed
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * @param mixed $privateKey
     */
    public function setPrivateKey($privateKey): void
    {
        $this->privateKey = $privateKey;
    }

    /**
     * @return mixed
     */
    public function getAlipayPublicKey()
    {
        return $this->alipayPublicKey;
    }

    /**
     * @param mixed $alipayPublicKey
     */
    public function setAlipayPublicKey($alipayPublicKey): void
    {
        $this->alipayPublicKey = $alipayPublicKey;
    }

    /**
     * @return mixed
     */
    public function getRootCertSN()
    {
        return $this->rootCertSN;
    }

    /**
     * @param mixed $rootCertSN
     */
    public function setRootCertSN($rootCertSN): void
    {
        $this->rootCertSN = $rootCertSN;
    }

    /**
     * @return mixed
     */
    public function getRootCertContent()
    {
        return $this->rootCertContent;
    }

    /**
     * @param mixed $rootCertContent
     */
    public function setRootCertContent($rootCertContent): void
    {
        $this->rootCertContent = $rootCertContent;
    }

    /**
     * @return mixed
     */
    public function getAppCertSN()
    {
        return $this->appCertSN;
    }

    /**
     * @param mixed $appCertSN
     */
    public function setAppCertSN($appCertSN): void
    {
        $this->appCertSN = $appCertSN;
    }

    /**
     * @return array
     */
    public function getCachedAlipayPublicKey(): array
    {
        return $this->cachedAlipayPublicKey;
    }

    /**
     * @param array $cachedAlipayPublicKey
     */
    public function setCachedAlipayPublicKey(array $cachedAlipayPublicKey): void
    {
        $this->cachedAlipayPublicKey = $cachedAlipayPublicKey;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset(string $charset): void
    {
        $this->charset = $charset;
    }

    /**
     * @return string
     */
    public function getSignType(): string
    {
        return $this->signType;
    }

    /**
     * @param string $signType
     */
    public function setSignType(string $signType): void
    {
        $this->signType = $signType;
    }

    /**
     * @return mixed
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * @param mixed $serverUrl
     */
    public function setServerUrl($serverUrl): void
    {
        $this->serverUrl = $serverUrl;
    }

    /**
     * @return string
     */
    public function getEncryptType(): string
    {
        return $this->encryptType;
    }

    /**
     * @param string $encryptType
     */
    public function setEncryptType(string $encryptType): void
    {
        $this->encryptType = $encryptType;
    }

    /**
     * @return mixed
     */
    public function getEncryptKey()
    {
        return $this->encryptKey;
    }

    /**
     * @param mixed $encryptKey
     */
    public function setEncryptKey($encryptKey): void
    {
        $this->encryptKey = $encryptKey;
    }

    /**
     * @return mixed
     */
    public function getPrivateKeyFilePath()
    {
        return $this->privateKeyFilePath;
    }

    /**
     * @param mixed $privateKeyFilePath
     */
    public function setPrivateKeyFilePath($privateKeyFilePath): void
    {
        $this->privateKeyFilePath = $privateKeyFilePath;
    }

    /**
     * @return mixed
     */
    public function getAlipayPublicKeyFilePath()
    {
        return $this->alipayPublicKeyFilePath;
    }

    /**
     * @param mixed $alipayPublicKeyFilePath
     */
    public function setAlipayPublicKeyFilePath($alipayPublicKeyFilePath): void
    {
        $this->alipayPublicKeyFilePath = $alipayPublicKeyFilePath;
    }

}