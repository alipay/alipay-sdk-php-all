# Alipay\OpenAPISDK\AlipayOpenPublicMessageGroupApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenPublicMessageGroupApi.md#send) | **POST** /v3/alipay/open/public/message/group/send | 分组消息发送接口


## `send()`

```php
send($alipayOpenPublicMessageGroupSendModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageGroupSendResponseModel
```

分组消息发送接口

开发者可调用此接口向指定分组中的关注用户发送消息，该接口为异步接口，一般请求成功后一段时间用户才能收到消息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMessageGroupApi(
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

$alipayOpenPublicMessageGroupSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageGroupSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageGroupSendModel

try {
    $result = $apiInstance->send($alipayOpenPublicMessageGroupSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMessageGroupApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMessageGroupSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageGroupSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageGroupSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
