# Alipay\OpenAPISDK\AlipayMerchantTradecomplainFeedbackApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submit()**](AlipayMerchantTradecomplainFeedbackApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/feedback | 商家处理交易投诉


## `submit()`

```php
submit($alipayMerchantTradecomplainFeedbackSubmitModel): object
```

商家处理交易投诉

商户请求交易投诉处理API，上传处理类型、处理内容描述及图片凭证。其中上传图片凭证需要先通过\"商户上传处理图片\"接口获取图片id，再将图片id设置到接口请求中。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantTradecomplainFeedbackApi(
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

$alipayMerchantTradecomplainFeedbackSubmitModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainFeedbackSubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainFeedbackSubmitModel

try {
    $result = $apiInstance->submit($alipayMerchantTradecomplainFeedbackSubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantTradecomplainFeedbackApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantTradecomplainFeedbackSubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainFeedbackSubmitModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
