# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasFaceSourceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**certify()**](DatadigitalFincloudGeneralsaasFaceSourceApi.md#certify) | **POST** /v3/datadigital/fincloud/generalsaas/face/source/certify | 权威核验源的核验接口


## `certify()`

```php
certify($data, $fileContent): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceSourceCertifyResponseModel
```

权威核验源的核验接口

上传人脸照片，调用权威核验源进行验证

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceSourceApi(
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

$data = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceSourceCertifyModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceSourceCertifyModel
$fileContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->certify($data, $fileContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceSourceApi->certify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceSourceCertifyModel**|  | [optional]
 **fileContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceSourceCertifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
