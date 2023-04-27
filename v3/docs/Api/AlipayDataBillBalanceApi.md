# Alipay\OpenAPISDK\AlipayDataBillBalanceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillBalanceApi.md#query) | **GET** /v3/alipay/data/bill/balance/query | 支付宝商家账户当前余额查询


## `query()`

```php
query($billUserId): \Alipay\OpenAPISDK\Model\AlipayDataBillBalanceQueryResponseModel
```

支付宝商家账户当前余额查询

为支付宝商家提供支付宝账户当前余额信息，包括冻结金额，可用余额和总额，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillBalanceApi(
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

$billUserId = 2088123456789012; // string | 目标查询账户（仅支持部分场景，查询自身时候不需要传递当前字段）。

try {
    $result = $apiInstance->query($billUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillBalanceApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billUserId** | **string**| 目标查询账户（仅支持部分场景，查询自身时候不需要传递当前字段）。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillBalanceQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
