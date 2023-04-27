# Alipay\OpenAPISDK\AlipayOpenPublicTemplateMessageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**get()**](AlipayOpenPublicTemplateMessageApi.md#get) | **GET** /v3/alipay/open/public/template/message/get | 消息模板领取接口


## `get()`

```php
get($templateId): \Alipay\OpenAPISDK\Model\AlipayOpenPublicTemplateMessageGetResponseModel
```

消息模板领取接口

帮助服务窗开发者从服务窗平台（fuwu.alipay.com）公共模板库里领取一个行业的消息模板--消息模板是一种消息的样式，如消费提醒、账单提醒等，主要用于isv帮助商户领取消息模板。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicTemplateMessageApi(
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

$templateId = TM000000223; // string | 消息母板id，登陆生活号后台(fuwu.alipay.com)，点击菜单“模板消息”，点击“模板库”，即可看到相应模板的消息母板id

try {
    $result = $apiInstance->get($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicTemplateMessageApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 消息母板id，登陆生活号后台(fuwu.alipay.com)，点击菜单“模板消息”，点击“模板库”，即可看到相应模板的消息母板id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicTemplateMessageGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
