# Alipay\OpenAPISDK\AlipayOpenFileApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayOpenFileApi.md#upload) | **POST** /v3/alipay/open/file/upload | 支付宝文件上传接口


## `upload()`

```php
upload($data, $fileContent): \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadResponseModel
```

支付宝文件上传接口

支付宝通用文件上传接口，开发者可调用此接口上传文件，提供给其他业务使用，例如：上传素材（视频/图片），供给到生活号+/小程序等业务使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenFileApi(
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

$data = new \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel
$fileContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->upload($data, $fileContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenFileApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel**|  | [optional]
 **fileContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenFileUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
