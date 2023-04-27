# Alipay\OpenAPISDK\AlipayOpenSearchAppkeywordquotaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSearchAppkeywordquotaApi.md#query) | **GET** /v3/alipay/open/search/appkeywordquota/query | 查询小程序可配置关键词数


## `query()`

```php
query($targetAppid): \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordquotaQueryResponseModel
```

查询小程序可配置关键词数

查询小程序可配置关键词数

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAppkeywordquotaApi(
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

$targetAppid = 2021001120654127; // string | 小程序id

try {
    $result = $apiInstance->query($targetAppid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAppkeywordquotaApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppid** | **string**| 小程序id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordquotaQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
