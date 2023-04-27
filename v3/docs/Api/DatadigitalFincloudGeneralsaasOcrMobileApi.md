# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasOcrMobileApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](DatadigitalFincloudGeneralsaasOcrMobileApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/ocr/mobile/initialize | OCR端云一体化识别初始化


## `initialize()`

```php
initialize($datadigitalFincloudGeneralsaasOcrMobileInitializeModel): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrMobileInitializeResponseModel
```

OCR端云一体化识别初始化

OCR端云一体化识别

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasOcrMobileApi(
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

$datadigitalFincloudGeneralsaasOcrMobileInitializeModel = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrMobileInitializeModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrMobileInitializeModel

try {
    $result = $apiInstance->initialize($datadigitalFincloudGeneralsaasOcrMobileInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasOcrMobileApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datadigitalFincloudGeneralsaasOcrMobileInitializeModel** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrMobileInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrMobileInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
