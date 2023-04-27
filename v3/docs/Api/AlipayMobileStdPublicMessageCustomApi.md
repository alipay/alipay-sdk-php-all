# Alipay\OpenAPISDK\AlipayMobileStdPublicMessageCustomApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayMobileStdPublicMessageCustomApi.md#send) | **POST** /v3/alipay/mobile/std/public/message/custom/send | 异步单发消息


## `send()`

```php
send($alipayMobileStdPublicMessageCustomSendModel): object
```

异步单发消息

商户给单个用户发送消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobileStdPublicMessageCustomApi(
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

$alipayMobileStdPublicMessageCustomSendModel = new \Alipay\OpenAPISDK\Model\AlipayMobileStdPublicMessageCustomSendModel(); // \Alipay\OpenAPISDK\Model\AlipayMobileStdPublicMessageCustomSendModel

try {
    $result = $apiInstance->send($alipayMobileStdPublicMessageCustomSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobileStdPublicMessageCustomApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobileStdPublicMessageCustomSendModel** | **\Alipay\OpenAPISDK\Model\AlipayMobileStdPublicMessageCustomSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
