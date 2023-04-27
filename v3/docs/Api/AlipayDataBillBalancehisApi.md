# Alipay\OpenAPISDK\AlipayDataBillBalancehisApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillBalancehisApi.md#query) | **GET** /v3/alipay/data/bill/balancehis/query | 支付宝商家账户历史余额查询


## `query()`

```php
query($bizDate, $bizMonth): \Alipay\OpenAPISDK\Model\AlipayDataBillBalancehisQueryResponseModel
```

支付宝商家账户历史余额查询

为支付宝商家提供支付宝账户历史余额信息，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillBalancehisApi(
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

$bizDate = 2019-08-01; // string | 查询指定自然日的起初余额和期末余额，biz_date与biz_month传入参数互斥
$bizMonth = 2019-08; // string | 查询指定自然月的起初余额和期末余额，biz_date与biz_month传入参数互斥

try {
    $result = $apiInstance->query($bizDate, $bizMonth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillBalancehisApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizDate** | **string**| 查询指定自然日的起初余额和期末余额，biz_date与biz_month传入参数互斥 | [optional]
 **bizMonth** | **string**| 查询指定自然月的起初余额和期末余额，biz_date与biz_month传入参数互斥 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillBalancehisQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
