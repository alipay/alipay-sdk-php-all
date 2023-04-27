# Alipay\OpenAPISDK\AlipayMerchantTradecomplainReplyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submit()**](AlipayMerchantTradecomplainReplyApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/reply | 商家留言回复


## `submit()`

```php
submit($alipayMerchantTradecomplainReplySubmitModel): object
```

商家留言回复

投诉单状态在“商家待处理”或“商家已反馈”或“商家处理超时”状态下，若有内容需要补充说明，可使用此接口提交文字或图片

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantTradecomplainReplyApi(
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

$alipayMerchantTradecomplainReplySubmitModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainReplySubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainReplySubmitModel

try {
    $result = $apiInstance->submit($alipayMerchantTradecomplainReplySubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantTradecomplainReplyApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantTradecomplainReplySubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainReplySubmitModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
