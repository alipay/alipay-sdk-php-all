# Alipay\OpenAPISDK\AlipayOpenPublicMessageSingleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenPublicMessageSingleApi.md#send) | **POST** /v3/alipay/open/public/message/single/send | 单发模板消息


## `send()`

```php
send($alipayOpenPublicMessageSingleSendModel): object
```

单发模板消息

商户可使用该接口向用户推送制定模板的消息，如动账提醒、停车通知等消息，消息模板可在生活号后台(fuwu.alipay.com)领取，点击“模板消息”菜单，即可在模板库中领取行业对应的模板

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMessageSingleApi(
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

$alipayOpenPublicMessageSingleSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageSingleSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageSingleSendModel

try {
    $result = $apiInstance->send($alipayOpenPublicMessageSingleSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMessageSingleApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMessageSingleSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageSingleSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
