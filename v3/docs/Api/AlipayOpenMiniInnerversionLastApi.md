# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionLastApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerversionLastApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/last/query | 内部链路查询最新版本号


## `query()`

```php
query($miniAppId, $bundleId, $appOrigin, $pid): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionLastQueryResponseModel
```

内部链路查询最新版本号

针对一二方场景的开发者，小程序提供一套统一的内部能力体系，定向输出赋能，本接口主要用于查询最新版本号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionLastApi(
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

$miniAppId = 2018********; // string | 小程序ID，仅特殊场景使用，普通业务方无需关注该参数。
$bundleId = com.alipay.alipaywallet; // string | 端信息
$appOrigin = AAA; // string | 业务来源场景
$pid = 2088*******; // string | 小程序主体

try {
    $result = $apiInstance->query($miniAppId, $bundleId, $appOrigin, $pid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionLastApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 小程序ID，仅特殊场景使用，普通业务方无需关注该参数。 | [optional]
 **bundleId** | **string**| 端信息 | [optional]
 **appOrigin** | **string**| 业务来源场景 | [optional]
 **pid** | **string**| 小程序主体 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionLastQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
