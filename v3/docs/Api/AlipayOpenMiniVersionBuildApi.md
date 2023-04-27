# Alipay\OpenAPISDK\AlipayOpenMiniVersionBuildApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniVersionBuildApi.md#query) | **GET** /v3/alipay/open/mini/version/build/query | 小程序查询版本构建状态


## `query()`

```php
query($appVersion, $bundleId): \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionBuildQueryResponseModel
```

小程序查询版本构建状态

小程序查询版本构建状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionBuildApi(
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

$appVersion = 0.0.1; // string | 小程序版本号
$bundleId = com.alipay.alipaywallet; // string | 小程序投放的端参数，默认为支付宝端。支持：  com.alipay.alipaywallet：支付宝端。 com.alipay.iot.xpaas：IOT端。 例如：投放到支付宝钱包为支付宝端需传入 com.alipay.alipaywallet。

try {
    $result = $apiInstance->query($appVersion, $bundleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionBuildApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appVersion** | **string**| 小程序版本号 | [optional]
 **bundleId** | **string**| 小程序投放的端参数，默认为支付宝端。支持：  com.alipay.alipaywallet：支付宝端。 com.alipay.iot.xpaas：IOT端。 例如：投放到支付宝钱包为支付宝端需传入 com.alipay.alipaywallet。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionBuildQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
