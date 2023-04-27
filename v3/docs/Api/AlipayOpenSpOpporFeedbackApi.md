# Alipay\OpenAPISDK\AlipayOpenSpOpporFeedbackApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenSpOpporFeedbackApi.md#modify) | **POST** /v3/alipay/open/sp/oppor/feedback/modify | 商机拓展完成


## `modify()`

```php
modify($alipayOpenSpOpporFeedbackModifyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpOpporFeedbackModifyResponseModel
```

商机拓展完成

商机拓展完成

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpOpporFeedbackApi(
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

$alipayOpenSpOpporFeedbackModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpOpporFeedbackModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpOpporFeedbackModifyModel

try {
    $result = $apiInstance->modify($alipayOpenSpOpporFeedbackModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpOpporFeedbackApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpOpporFeedbackModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpOpporFeedbackModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpOpporFeedbackModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
