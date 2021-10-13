<?php

require_once '../aop/AlipayConfig.php';
require_once '../aop/AopCertClient.php';
require_once '../aop/AopClient.php';
require_once '../aop/request/AlipayTradePrecreateRequest.php';

$app_cert_path="your_cert_path";
$alipay_cert_path="your_alipay_cert_path";
$alipay_root_cert_path="your_root_cert_path";
$url = "https://openapi.alipaydev.com/gateway.do";
$app_id="your_app_ID";
$privateKey="your_privateKey";

// 证书模式的测试
$alipayConfig = new AlipayConfig();
$alipayConfig->setAppId($app_id);
$alipayConfig->setCharset("utf-8");
$alipayConfig->setFormat("json");
$alipayConfig->setSignType("RSA2");
$alipayConfig->setServerUrl($url);
$alipayConfig->setPrivateKey($privateKey);

// content 和 path 只需要设置一个即可
$alipayConfig->setAppCertPath($app_cert_path);
//$alipayConfig->setAppCertContent()
$alipayConfig->setAlipayPublicCertPath($alipay_cert_path);
//$alipayConfig->setAlipayPublicCertContent()
$alipayConfig->setRootCertPath($alipay_root_cert_path);
//$alipayConfig->setRootCertContent()

$aop = new AopCertClient($alipayConfig);
$aop->isCheckAlipayPublicCert = true;

$parameter = "{" .
    "\"out_trade_no\":\"20140320010107002\"," .
    "\"total_amount\":\"12225\"," .
    "\"subject\":\"Iphone6 65G\"," .
    "\"store_id\":\"CD_001\"," .
    "\"timeout_express\":\"100m\"}";
$request = new AlipayTradePrecreateRequest ();
$request->setBizContent($parameter);
$response = $aop->execute($request);
$responseApiName = str_replace(".", "_", $request->getApiMethodName()) . "_response";
// 拿到结果
$responseResult = $response->$responseApiName;
echo var_dump($responseResult),PHP_EOL;


//普通方式的测试

$$url = "https://openapi.alipaydev.com/gateway.do";
$app_id="your_appId";
$privateKey="your_privateKey";
$publicKey ="your_publicKey";

$config = new AlipayConfig();
$config->setAppId($app_id);
$config->setCharset("utf-8");
$config->setFormat("json");
$config->setSignType("RSA2");
$config->setServerUrl($url);
$config->setPrivateKey($privateKey);
$config->setAlipayPublicKey($publicKey);


$aop = new AopClient($config);

$parameter = "{" .
    "\"out_trade_no\":\"20140320010107002\"," .
    "\"total_amount\":\"12225\"," .
    "\"subject\":\"Iphone6 65G\"," .
    "\"store_id\":\"CD_001\"," .
    "\"timeout_express\":\"100m\"}";
$request = new AlipayTradePrecreateRequest ();
$request->setBizContent($parameter);
$response = $aop->execute($request);
$responseApiName = str_replace(".", "_", $request->getApiMethodName()) . "_response";
// 拿到结果
$responseResult = $response->$responseApiName;
echo var_dump($responseResult),PHP_EOL;
