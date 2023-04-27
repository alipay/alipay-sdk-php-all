# Alipay\OpenAPISDK\AlipayMerchantIndirectSmidbindApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMerchantIndirectSmidbindApi.md#query) | **GET** /v3/alipay/merchant/indirect/smidbind/query | 获取商家认证状态


## `query()`

```php
query($subMerchantId): \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectSmidbindQueryResponseModel
```

获取商家认证状态

获取商家认证状态，状态枚举：已确认/未确认/已注销

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIndirectSmidbindApi(
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

$subMerchantId = 2088000000000001; // string | 支付宝商户id

try {
    $result = $apiInstance->query($subMerchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIndirectSmidbindApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subMerchantId** | **string**| 支付宝商户id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectSmidbindQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
