# Alipay\OpenAPISDK\AlipayOpenMiniAppdeployByappversionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniAppdeployByappversionApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/byappversion/query | 通过版本查询小程序发布


## `query()`

```php
query($miniAppId, $bundleId, $instCode, $appVersion): \Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployByappversionQueryResponseModel
```

通过版本查询小程序发布

伙伴平台使用，用于向开发者展示小程序发布信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniAppdeployByappversionApi(
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

$miniAppId = 2011XXXXXXX; // string | 小程序ID
$bundleId = com.amap.app; // string | 端标识
$instCode = alipay; // string | 租户
$appVersion = 0.0.1; // string | 小程序版本

try {
    $result = $apiInstance->query($miniAppId, $bundleId, $instCode, $appVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniAppdeployByappversionApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 小程序ID | [optional]
 **bundleId** | **string**| 端标识 | [optional]
 **instCode** | **string**| 租户 | [optional]
 **appVersion** | **string**| 小程序版本 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployByappversionQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
