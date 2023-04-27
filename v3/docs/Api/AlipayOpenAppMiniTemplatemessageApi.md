# Alipay\OpenAPISDK\AlipayOpenAppMiniTemplatemessageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenAppMiniTemplatemessageApi.md#send) | **POST** /v3/alipay/open/app/mini/templatemessage/send | 小程序发送模板消息


## `send()`

```php
send($alipayOpenAppMiniTemplatemessageSendModel): object
```

小程序发送模板消息

小程序通过openapi给用户触达消息，主要为支付后的触达（通过消费id）、用户提交表单后的触达（通过formId）、刷脸后的触达（通过ftoken）以及用户订阅消息模板后的触达。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppMiniTemplatemessageApi(
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

$alipayOpenAppMiniTemplatemessageSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAppMiniTemplatemessageSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAppMiniTemplatemessageSendModel

try {
    $result = $apiInstance->send($alipayOpenAppMiniTemplatemessageSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppMiniTemplatemessageApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAppMiniTemplatemessageSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAppMiniTemplatemessageSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
