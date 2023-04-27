# Alipay\OpenAPISDK\AlipayOpenMiniAppdeployBydeployversionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniAppdeployBydeployversionApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/bydeployversion/query | 根据发布版本查询小程序发布信息


## `query()`

```php
query($bundleId, $miniAppId, $instCode, $deployVersion): \Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployBydeployversionQueryResponseModel
```

根据发布版本查询小程序发布信息

用于伙伴向开发者展示小程序发布信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniAppdeployBydeployversionApi(
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

$bundleId = com.amap.app; // string | 客户端标识
$miniAppId = 2021XXXXXX; // string | 小程序ID
$instCode = alipay; // string | 租户
$deployVersion = 0.2.201910101.2; // string | 发布标识

try {
    $result = $apiInstance->query($bundleId, $miniAppId, $instCode, $deployVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniAppdeployBydeployversionApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundleId** | **string**| 客户端标识 | [optional]
 **miniAppId** | **string**| 小程序ID | [optional]
 **instCode** | **string**| 租户 | [optional]
 **deployVersion** | **string**| 发布标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployBydeployversionQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
