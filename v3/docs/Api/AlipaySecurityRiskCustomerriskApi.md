# Alipay\OpenAPISDK\AlipaySecurityRiskCustomerriskApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipaySecurityRiskCustomerriskApi.md#send) | **POST** /v3/alipay/security/risk/customerrisk/send | 商户数据同步


## `send()`

```php
send($alipaySecurityRiskCustomerriskSendModel): object
```

商户数据同步

判断商户有问题时，服务商将商户信息同步到支付宝

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySecurityRiskCustomerriskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 初始化alipay参数
$alipayConfig = new \Alipay\OpenAPISDK\Util\Model\AlipayConfig();
$alipayConfig->setAppId('app_id');
$alipayConfig->setPrivateKey('private_key');
// 密钥模式
$alipayConfig->setAlipayPublicKey('alipay_public_key');
// 证书模式
// $alipayConfig->setAppCertPath('../appCertPublicKey.crt');
// $alipayConfig->setAlipayPublicCertPath('../alipayCertPublicKey_RSA2.crt');
// $alipayConfig->setRootCertPath('../alipayRootCert.crt');
$alipayConfig->setEncryptKey('encrypt_key');
$alipayConfigUtil = new \Alipay\OpenAPISDK\Util\AlipayConfigUtil($alipayConfig);
$apiInstance->setAlipayConfigUtil($alipayConfigUtil);

$alipaySecurityRiskCustomerriskSendModel = new \Alipay\OpenAPISDK\Model\AlipaySecurityRiskCustomerriskSendModel(); // \Alipay\OpenAPISDK\Model\AlipaySecurityRiskCustomerriskSendModel

try {
    $result = $apiInstance->send($alipaySecurityRiskCustomerriskSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySecurityRiskCustomerriskApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipaySecurityRiskCustomerriskSendModel** | **\Alipay\OpenAPISDK\Model\AlipaySecurityRiskCustomerriskSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
