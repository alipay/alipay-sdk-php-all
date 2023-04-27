# Alipay\OpenAPISDK\AlipayOpenMiniAppdeployByappidApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniAppdeployByappidApi.md#query) | **GET** /v3/alipay/open/mini/appdeploy/byappid/query | 根据APPID分页查询小程序发布信息


## `query()`

```php
query($miniAppId, $bundleId, $instCode, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployByappidQueryResponseModel
```

根据APPID分页查询小程序发布信息

用于伙伴平台面向开发者提供查询小程序发布能力

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniAppdeployByappidApi(
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

$miniAppId = 2018XXXXXX; // string | 小程序应用ID
$bundleId = com.amap.app; // string | 端标识
$instCode = alipay; // string | 租户标识
$pageNum = 1; // int | 当前页，从1开始
$pageSize = 20; // int | 每页个数

try {
    $result = $apiInstance->query($miniAppId, $bundleId, $instCode, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniAppdeployByappidApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 小程序应用ID | [optional]
 **bundleId** | **string**| 端标识 | [optional]
 **instCode** | **string**| 租户标识 | [optional]
 **pageNum** | **int**| 当前页，从1开始 | [optional]
 **pageSize** | **int**| 每页个数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniAppdeployByappidQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
