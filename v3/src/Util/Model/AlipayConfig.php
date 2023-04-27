<?php

namespace Alipay\OpenAPISDK\Util\Model;

class AlipayConfig
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
     * 商户应用公钥证书路径（证书模式下设置，公钥模式下无需设置）
     */
    private $appCertPath;

    /**
     * 支付宝公钥证书路径（证书模式下设置，公钥模式下无需设置）
     */
    private $alipayPublicCertPath;

    /**
     * 支付宝根证书路径（证书模式下设置，公钥模式下无需设置）
     */
    private $rootCertPath;

    /**
     * 指定商户公钥应用证书内容字符串，该字段与$appCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
     */
    private $appCertContent;

    /**
     * 指定支付宝公钥证书内容字符串，该字段与$alipayPublicCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
     */
    private $alipayPublicCertContent;

    /**
     * 指定根证书内容字符串，该字段与$rootCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
     */
    private $rootCertContent;

    /**
     * 敏感信息对称加密算法类型，推荐：AES
     */
    private $encryptType = "AES";

    /**
     * 敏感信息对称加密算法密钥
     */
    private $encryptKey;

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

    /**
     * @return mixed
     */
    public function getAppCertPath()
    {
        return $this->appCertPath;
    }

    /**
     * @param mixed $appCertPath
     */
    public function setAppCertPath($appCertPath): void
    {
        $this->appCertPath = $appCertPath;
    }

    /**
     * @return mixed
     */
    public function getAlipayPublicCertPath()
    {
        return $this->alipayPublicCertPath;
    }

    /**
     * @param mixed $alipayPublicCertPath
     */
    public function setAlipayPublicCertPath($alipayPublicCertPath): void
    {
        $this->alipayPublicCertPath = $alipayPublicCertPath;
    }

    /**
     * @return mixed
     */
    public function getRootCertPath()
    {
        return $this->rootCertPath;
    }

    /**
     * @param mixed $rootCertPath
     */
    public function setRootCertPath($rootCertPath): void
    {
        $this->rootCertPath = $rootCertPath;
    }

    /**
     * @return mixed
     */
    public function getAppCertContent()
    {
        return $this->appCertContent;
    }

    /**
     * @param mixed $appCertContent
     */
    public function setAppCertContent($appCertContent): void
    {
        $this->appCertContent = $appCertContent;
    }

    /**
     * @return mixed
     */
    public function getAlipayPublicCertContent()
    {
        return $this->alipayPublicCertContent;
    }

    /**
     * @param mixed $alipayPublicCertContent
     */
    public function setAlipayPublicCertContent($alipayPublicCertContent): void
    {
        $this->alipayPublicCertContent = $alipayPublicCertContent;
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

}