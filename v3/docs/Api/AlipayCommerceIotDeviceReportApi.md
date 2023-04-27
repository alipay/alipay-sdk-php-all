# Alipay\OpenAPISDK\AlipayCommerceIotDeviceReportApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayCommerceIotDeviceReportApi.md#upload) | **POST** /v3/alipay/commerce/iot/device/report/upload | 设备检测报告上传


## `upload()`

```php
upload($alipayCommerceIotDeviceReportUploadModel): \Alipay\OpenAPISDK\Model\AlipayCommerceIotDeviceReportUploadResponseModel
```

设备检测报告上传

设备检测报告上传

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceIotDeviceReportApi(
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

$alipayCommerceIotDeviceReportUploadModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceIotDeviceReportUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceIotDeviceReportUploadModel

try {
    $result = $apiInstance->upload($alipayCommerceIotDeviceReportUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceIotDeviceReportApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceIotDeviceReportUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceIotDeviceReportUploadModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceIotDeviceReportUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
