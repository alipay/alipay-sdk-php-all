
<?php
class AlipayConfig {
    /**
     * 网关地址
     * 线上：https://openapi.alipay.com/gateway.do
     * 沙箱：https://openapi.alipaydev.com/gateway.do
     */
    private $serverUrl;

    /**
     * 开放平台上创建的应用的ID
     */
    private $appId;

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

    /**
     * 商户私钥
     */
    private $privateKey;

    /**
     * 支付宝公钥字符串（公钥模式下设置，证书模式下无需设置）
     */
    private $alipayPublicKey;

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
     * 指定商户公钥应用证书内容字符串，该字段与appCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
     */
    private $appCertContent;

    /**
     * 指定支付宝公钥证书内容字符串，该字段与alipayPublicCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
     */
    private $alipayPublicCertContent;

    /**
     * 指定根证书内容字符串，该字段与rootCertPath只需指定一个，优先以该字段的值为准（证书模式下设置，公钥模式下无需设置）
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


    public function getServerUrl() {
        return $this->serverUrl;
    }

    public function setServerUrl($serverUrl) {
        $this->serverUrl = $serverUrl;
    }
    public function getAppId(){
        return $this->appId;
    }
    public function setAppId($appId){
        $this->appId = $appId;
    }
    public function getFormat(){
        return $this->format;
    }
    public function setFormat($format){
        $this->format = $format;
    }
    public function getCharset() {
        return $this->charset;
    }

    public function setCharset($charset) {
        $this->charset = $charset;
    }

    public function getSignType() {
        return $this->signType;
    }

    public function setSignType($signType) {
        $this->signType = $signType;
    }
    public function getEncryptKey() {
        return $this->encryptKey;
    }

    public function setEncryptKey($encryptKey) {
       $this->encryptKey = $encryptKey;
    }
    public function getEncryptType() {
        return $this->encryptType;
    }
    public function setEncryptType($encryptType) {
        $this->encryptType = $encryptType;
    }
    public function getPrivateKey() {
        return $this->privateKey;
    }

    public function setPrivateKey($privateKey) {
        $this->privateKey = $privateKey;
    }
    public function getAlipayPublicKey() {
        return $this->alipayPublicKey;
    }
    public function setAlipayPublicKey($alipayPublicKey) {
        $this->alipayPublicKey = $alipayPublicKey;
    }
    public function getAppCertPath() {
        return $this->appCertPath;
    }

    public function setAppCertPath($appCertPath) {
        $this->appCertPath = $appCertPath;
    }

    public function getAlipayPublicCertPath() {
        return $this->alipayPublicCertPath;
    }
    public function setAlipayPublicCertPath($alipayPublicCertPath) {
        $this->alipayPublicCertPath = $alipayPublicCertPath;
    }

    public function getRootCertPath() {
        return $this->rootCertPath;
    }
    public function setRootCertPath($rootCertPath) {
        $this->rootCertPath = $rootCertPath;
    }
    public function getAppCertContent() {
        return $this->appCertContent;
    }
    public function setAppCertContent($appCertContent) {
        $this->appCertContent = $appCertContent;
    }
    public function getAlipayPublicCertContent() {
        return $this->alipayPublicCertContent;
    }
    public function setAlipayPublicCertContent($alipayPublicCertContent) {
        $this->alipayPublicCertContent = $alipayPublicCertContent;
    }
    public function getRootCertContent() {
        return $this->rootCertContent;
    }

    public function setRootCertContent($rootCertContent) {
        $this->rootCertContent = $rootCertContent;
    }
 
}