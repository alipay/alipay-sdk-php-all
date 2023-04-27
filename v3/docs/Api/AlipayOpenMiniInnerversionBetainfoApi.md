# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionBetainfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerversionBetainfoApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/betainfo/query | 查看可邀测状态接口


## `query()`

```php
query($pluginId, $bundleId, $pluginVersion, $appOrigin): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBetainfoQueryResponseModel
```

查看可邀测状态接口

查看插件可邀测版本状态,邀测结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionBetainfoApi(
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

$pluginId = 2021xxxx; // string | 插件ID
$bundleId = com.alipay.alipaywallet; // string | 端信息
$pluginVersion = 0.0.1; // string | 查询版本号
$appOrigin = ASTORE; // string | 业务来源

try {
    $result = $apiInstance->query($pluginId, $bundleId, $pluginVersion, $appOrigin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionBetainfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pluginId** | **string**| 插件ID | [optional]
 **bundleId** | **string**| 端信息 | [optional]
 **pluginVersion** | **string**| 查询版本号 | [optional]
 **appOrigin** | **string**| 业务来源 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBetainfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
