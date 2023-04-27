# Alipay\OpenAPISDK\AlipayOpenPublicMessageCustomApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenPublicMessageCustomApi.md#send) | **POST** /v3/alipay/open/public/message/custom/send | 异步单发消息


## `send()`

```php
send($alipayOpenPublicMessageCustomSendModel): object
```

异步单发消息

开发者可使用该接口向指定关注用户推送客服消息，一般用于开发者使用接口与用户进行实时信息交互，例如自动回答用户包含某些指定关键字的咨询等。注意：用户必须在48小时之内与该生活号有交互行为才能收到消息（交互行为包括进入生活号、点击菜单、向生活号发送消息等），每个生活号每天只能向1个用户推送100条消息，超过这个数目会报错频率超限

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMessageCustomApi(
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

$alipayOpenPublicMessageCustomSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageCustomSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageCustomSendModel

try {
    $result = $apiInstance->send($alipayOpenPublicMessageCustomSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMessageCustomApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMessageCustomSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageCustomSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
