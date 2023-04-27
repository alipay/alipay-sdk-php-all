# Alipay\OpenAPISDK\ZhimaCustomerJobworthPictureApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](ZhimaCustomerJobworthPictureApi.md#upload) | **POST** /v3/zhima/customer/jobworth/picture/upload | 职得工作证图片上传


## `upload()`

```php
upload($zhimaCustomerJobworthPictureUploadModel): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPictureUploadResponseModel
```

职得工作证图片上传

工作证图片上传通用接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthPictureApi(
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

$zhimaCustomerJobworthPictureUploadModel = new \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPictureUploadModel(); // \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPictureUploadModel

try {
    $result = $apiInstance->upload($zhimaCustomerJobworthPictureUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthPictureApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCustomerJobworthPictureUploadModel** | **\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPictureUploadModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPictureUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
