# Alipay\OpenAPISDK\AlipayOpenMiniInnerbaseinfoApplogoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayOpenMiniInnerbaseinfoApplogoApi.md#upload) | **POST** /v3/alipay/open/mini/innerbaseinfo/applogo/upload | 内部小程序-小程序logo图片上传


## `upload()`

```php
upload($appLogo): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel
```

内部小程序-小程序logo图片上传

上传小程序logo图片

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerbaseinfoApplogoApi(
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

$appLogo = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->upload($appLogo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerbaseinfoApplogoApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appLogo** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerbaseinfoApplogoUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
