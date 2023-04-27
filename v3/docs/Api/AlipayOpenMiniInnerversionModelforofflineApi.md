# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionModelforofflineApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerversionModelforofflineApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/modelforoffline/query | 小程序线上版本包数据同步线下场景查询


## `query()`

```php
query($miniAppId, $appVersion, $bundleId, $instCode): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionModelforofflineQueryResponseModel
```

小程序线上版本包数据同步线下场景查询

用于查询线上的版本包数据，同步到线下

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionModelforofflineApi(
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

$miniAppId = 2018********; // string | 小程序ID
$appVersion = 0.0.1; // string | 版本号
$bundleId = com.alipay.alipaywallet; // string | com.alipay.alipaywallet:支付包
$instCode = alipay; // string | alipay:支付宝

try {
    $result = $apiInstance->query($miniAppId, $appVersion, $bundleId, $instCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionModelforofflineApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 小程序ID | [optional]
 **appVersion** | **string**| 版本号 | [optional]
 **bundleId** | **string**| com.alipay.alipaywallet:支付包 | [optional]
 **instCode** | **string**| alipay:支付宝 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionModelforofflineQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
