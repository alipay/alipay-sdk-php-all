# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionTemplatedApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayOpenMiniInnerversionTemplatedApi.md#upload) | **POST** /v3/alipay/open/mini/innerversion/templated/upload | 基于模板构建版本


## `upload()`

```php
upload($alipayOpenMiniInnerversionTemplatedUploadModel): object
```

基于模板构建版本

基于模板构建实例化小程序，同步接口，调用成功表示创建版本成功

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionTemplatedApi(
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

$alipayOpenMiniInnerversionTemplatedUploadModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionTemplatedUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionTemplatedUploadModel

try {
    $result = $apiInstance->upload($alipayOpenMiniInnerversionTemplatedUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionTemplatedApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionTemplatedUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionTemplatedUploadModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
