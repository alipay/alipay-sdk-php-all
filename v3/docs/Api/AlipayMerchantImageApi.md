# Alipay\OpenAPISDK\AlipayMerchantImageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayMerchantImageApi.md#upload) | **POST** /v3/alipay/merchant/image/upload | 商户上传处理图片


## `upload()`

```php
upload($data, $imageContent): \Alipay\OpenAPISDK\Model\AlipayMerchantImageUploadResponseModel
```

商户上传处理图片

商户上传投诉处理、服务咨询的图片接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantImageApi(
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

$data = new \Alipay\OpenAPISDK\Model\AlipayMerchantImageUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantImageUploadModel
$imageContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->upload($data, $imageContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantImageApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\AlipayMerchantImageUploadModel**|  | [optional]
 **imageContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantImageUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
