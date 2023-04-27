# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionNobuildApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayOpenMiniInnerversionNobuildApi.md#upload) | **POST** /v3/alipay/open/mini/innerversion/nobuild/upload | 手淘小程序产物包免构建版本上传


## `upload()`

```php
upload($alipayOpenMiniInnerversionNobuildUploadModel): object
```

手淘小程序产物包免构建版本上传

手淘小程序产物包免构建版本上传

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionNobuildApi(
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

$alipayOpenMiniInnerversionNobuildUploadModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionNobuildUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionNobuildUploadModel

try {
    $result = $apiInstance->upload($alipayOpenMiniInnerversionNobuildUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionNobuildApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionNobuildUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionNobuildUploadModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
