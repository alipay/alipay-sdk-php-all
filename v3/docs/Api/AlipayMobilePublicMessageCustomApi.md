# Alipay\OpenAPISDK\AlipayMobilePublicMessageCustomApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayMobilePublicMessageCustomApi.md#send) | **POST** /v3/alipay/mobile/public/message/custom/send | 异步单发消息


## `send()`

```php
send($alipayMobilePublicMessageCustomSendModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageCustomSendResponseModel
```

异步单发消息

异步单发消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicMessageCustomApi(
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

$alipayMobilePublicMessageCustomSendModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageCustomSendModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageCustomSendModel

try {
    $result = $apiInstance->send($alipayMobilePublicMessageCustomSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicMessageCustomApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicMessageCustomSendModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageCustomSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicMessageCustomSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
