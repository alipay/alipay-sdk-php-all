# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionInstantiationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerversionInstantiationApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/instantiation/query | 小程序实例化关系查询


## `query()`

```php
query($appOrigin, $bundleId, $miniAppId, $appVersion): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionInstantiationQueryResponseModel
```

小程序实例化关系查询

用于通过模板实例化的小程序版本查询实例化关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionInstantiationApi(
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

$appOrigin = AAA; // string | 来源类型，新接入方需要向支付宝申请专用来源，否则不予接入，申请方式请参见接入手册。
$bundleId = com.alipay.alipaywallet; // string | 端id
$miniAppId = 2021000116680014; // string | 小程序ID，特殊场景专用，普通业务方无需关注该参数。
$appVersion = 0.0.1; // string | 实例化小程序版本号

try {
    $result = $apiInstance->query($appOrigin, $bundleId, $miniAppId, $appVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionInstantiationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appOrigin** | **string**| 来源类型，新接入方需要向支付宝申请专用来源，否则不予接入，申请方式请参见接入手册。 | [optional]
 **bundleId** | **string**| 端id | [optional]
 **miniAppId** | **string**| 小程序ID，特殊场景专用，普通业务方无需关注该参数。 | [optional]
 **appVersion** | **string**| 实例化小程序版本号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionInstantiationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
