# Alipay\OpenAPISDK\AlipayEcoFilePathApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEcoFilePathApi.md#query) | **GET** /v3/alipay/eco/file/path/query | 获取文件直传地址（E签宝）


## `query()`

```php
query($targetAppId, $contentMd5, $contentType, $fileName, $fileSize): \Alipay\OpenAPISDK\Model\AlipayEcoFilePathQueryResponseModel
```

获取文件直传地址（E签宝）

获取文件直传地址（E签宝）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoFilePathApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$contentMd5 = eGMHwA4TWnbg6PYKMxreUQ==; // string | 先计算文件md5值，在对该md5值进行base64编码
$contentType = application/octet-stream; // string | 目标文件的MIME类型
$fileName = 附件.zip; // string | 文件名称。 注意：必须带上文件扩展名，不然会导致后续发起流程校验不通过。示例：合同.pdf。
$fileSize = 2542635; // int | 文件大小，单位byte。最大允许上传30Mb

try {
    $result = $apiInstance->query($targetAppId, $contentMd5, $contentType, $fileName, $fileSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoFilePathApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **contentMd5** | **string**| 先计算文件md5值，在对该md5值进行base64编码 | [optional]
 **contentType** | **string**| 目标文件的MIME类型 | [optional]
 **fileName** | **string**| 文件名称。 注意：必须带上文件扩展名，不然会导致后续发起流程校验不通过。示例：合同.pdf。 | [optional]
 **fileSize** | **int**| 文件大小，单位byte。最大允许上传30Mb | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoFilePathQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
