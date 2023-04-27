# Alipay\OpenAPISDK\AlipayOpenPublicDefaultExtensionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenPublicDefaultExtensionApi.md#create) | **POST** /v3/alipay/open/public/default/extension/create | 默认扩展区创建接口


## `create()`

```php
create($alipayOpenPublicDefaultExtensionCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicDefaultExtensionCreateResponseModel
```

默认扩展区创建接口

开发者可使用此接口创建默认扩展区

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicDefaultExtensionApi(
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

$alipayOpenPublicDefaultExtensionCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicDefaultExtensionCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicDefaultExtensionCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicDefaultExtensionCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicDefaultExtensionApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicDefaultExtensionCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicDefaultExtensionCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicDefaultExtensionCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
