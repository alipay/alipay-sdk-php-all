# Alipay\OpenAPISDK\AlipayMobilePublicMessageSingleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayMobilePublicMessageSingleApi.md#send) | **POST** /v3/alipay/mobile/public/message/single/send | 单发模板消息


## `send()`

```php
send($alipayMobilePublicMessageSingleSendModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageSingleSendResponseModel
```

单发模板消息

单发模板消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicMessageSingleApi(
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

$alipayMobilePublicMessageSingleSendModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageSingleSendModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageSingleSendModel

try {
    $result = $apiInstance->send($alipayMobilePublicMessageSingleSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicMessageSingleApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicMessageSingleSendModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageSingleSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageSingleSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
