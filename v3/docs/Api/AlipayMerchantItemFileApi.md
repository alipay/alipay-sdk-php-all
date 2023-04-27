# Alipay\OpenAPISDK\AlipayMerchantItemFileApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayMerchantItemFileApi.md#upload) | **POST** /v3/alipay/merchant/item/file/upload | 商品文件上传接口


## `upload()`

```php
upload($data, $fileContent): \Alipay\OpenAPISDK\Model\AlipayMerchantItemFileUploadResponseModel
```

商品文件上传接口

商户把商品对应的图片文件、普通文件信息上传到支付宝，后续通过该接口返回的素材ID来和支付宝交互

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantItemFileApi(
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

$data = new \Alipay\OpenAPISDK\Model\AlipayMerchantItemFileUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantItemFileUploadModel
$fileContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->upload($data, $fileContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantItemFileApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\AlipayMerchantItemFileUploadModel**|  | [optional]
 **fileContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantItemFileUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
