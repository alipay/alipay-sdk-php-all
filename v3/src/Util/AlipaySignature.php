<?php

namespace Alipay\OpenAPISDK\Util;

use Alipay\OpenAPISDK\ApiException;

class AlipaySignature
{
    /**
     * 通用签名方法
     * @param string $data 待签名内容
     * @param string $privateKey 商户私钥，根据keyfromfile来判断是读取字符串还是读取文件，false:填写私钥字符串去回车和空格 true:填写私钥文件路径
     * @param string $signType 签名类型：RSA2
     * @param false $keyFromFile 私钥获取方式，读取字符串还是读文件
     * @return string
     * @throws ApiException
     */
    public static function aloneRsaSign($data, $privateKey, $signType = "RSA2", $keyFromFile = false)
    {
        if ("RSA2" !== $signType) {
            throw new ApiException("signType只支持RSA2", 400);
        }

        $alipayConfigUtil = new AlipayConfigUtil();
        if ($keyFromFile) {
            $alipayConfigUtil->setPrivateKeyFilePath($privateKey);
        } else {
            $alipayConfigUtil->setPrivateKey(
                "-----BEGIN RSA PRIVATE KEY-----\n" .
                wordwrap($privateKey, 64, "\n", true) .
                "\n-----END RSA PRIVATE KEY-----");
        }
        return $alipayConfigUtil->generateSign($data);
    }

    /**
     * @throws ApiException
     */
    public static function rsaSign($params, $privateKey, $signType = "RSA2", $keyFromFile = false)
    {
        return AlipaySignature::aloneRsaSign(AlipaySignature::getSignContent($params), $privateKey, $signType, $keyFromFile);
    }

    /**
     * 密钥模式RSA2通用验签方法，主要用于支付接口的返回参数的验签比如：当面付，APP支付，手机网站支付，电脑网站支付
     * @param mixed $params 待验签的从支付宝接收到的参数Map
     * @param string $alipayPublicKey 支付宝公钥，根据keyfromfile来判断是读取字符串还是读取文件，false:填写公钥字符串去回车和空格 true:填写公钥文件路径
     * @param string $signType 签名类型：RSA2
     * @param false $keyFromFile 公钥获取方式，读取字符串还是读文件
     * @return bool
     * @throws ApiException
     */
    public static function rsaCheckV1($params, $alipayPublicKey, $signType = 'RSA2', $keyFromFile = false)
    {
        $sign = $params['sign'];
        unset($params['sign']);
        unset($params['sign_type']);
        return AlipaySignature::verify(AlipaySignature::getSignContent($params), $sign, $alipayPublicKey, $signType, $keyFromFile);
    }

    /**
     * 密钥模式RSA2通用验签方法，主要是用于生活号相关的事件消息和口碑服务市场订购信息等发送到应用网关地址的异步信息的验签
     * @param mixed $params 待验签的从支付宝接收到的参数Map
     * @param string $alipayPublicKey 支付宝公钥，根据keyfromfile来判断是读取字符串还是读取文件，false:填写公钥字符串去回车和空格 true:填写公钥文件路径
     * @param string $signType 签名类型：RSA2
     * @param false $keyFromFile 公钥获取方式，读取字符串还是读文件
     * @return bool
     * @throws ApiException
     */
    public static function rsaCheckV2($params, $alipayPublicKey, $signType = 'RSA2', $keyFromFile = false)
    {
        $sign = $params['sign'];
        unset($params['sign']);
        return AlipaySignature::verify(AlipaySignature::getSignContent($params), $sign, $alipayPublicKey, $signType, $keyFromFile);
    }

    /**
     * 密钥模式RSA2通用验签方法
     * @param string $data 待验签字符串
     * @param string $sign 签名
     * @param string $alipayPublicKey 支付宝公钥，根据keyfromfile来判断是读取字符串还是读取文件，false:填写公钥字符串去回车和空格 true:填写公钥文件路径
     * @param string $signType 签名类型：RSA2
     * @param false $keyFromFile 公钥获取方式，读取字符串还是读文件
     * @return bool
     * @throws ApiException
     */
    public static function verify($data, $sign, $alipayPublicKey, $signType = 'RSA2', $keyFromFile = false)
    {
        if ("RSA2" !== $signType) {
            throw new ApiException("signType只支持RSA2", 400);
        }
        if (!$keyFromFile) {
            $res = "-----BEGIN PUBLIC KEY-----\n" .
                wordwrap($alipayPublicKey, 64, "\n", true) .
                "\n-----END PUBLIC KEY-----";
        } else {
            //读取公钥文件
            $pubKey = file_get_contents($alipayPublicKey);
            //转换为openssl格式密钥
            $res = openssl_get_publickey($pubKey);
        }

        if (!$res) {
            throw new ApiException('支付宝RSA公钥错误。请检查公钥文件格式是否正确', 400);
        }

        //调用openssl内置方法验签，返回bool值
        $result = FALSE;
        $result = (openssl_verify($data, base64_decode($sign), $res, OPENSSL_ALGO_SHA256) === 1);

        if ($keyFromFile) {
            //释放资源
            openssl_free_key($res);
        }

        return $result;
    }

    /**
     * 获取签名字符串
     *
     * @param $params
     * @return string
     */
    private static function getSignContent($params)
    {
        ksort($params);
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if ("@" != substr($v, 0, 1)) {
                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }
}