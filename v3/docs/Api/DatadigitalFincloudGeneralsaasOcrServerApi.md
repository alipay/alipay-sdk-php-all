# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasOcrServerApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**detect()**](DatadigitalFincloudGeneralsaasOcrServerApi.md#detect) | **POST** /v3/datadigital/fincloud/generalsaas/ocr/server/detect | 服务端OCR


## `detect()`

```php
detect($data, $fileContent): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrServerDetectResponseModel
```

服务端OCR

纯服务端OCR对接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasOcrServerApi(
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

$data = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrServerDetectModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrServerDetectModel
$fileContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->detect($data, $fileContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasOcrServerApi->detect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrServerDetectModel**|  | [optional]
 **fileContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasOcrServerDetectResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
