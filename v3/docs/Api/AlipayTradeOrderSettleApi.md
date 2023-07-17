# Alipay\OpenAPISDK\AlipayTradeOrderSettleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayTradeOrderSettleApi.md#query) | **GET** /v3/alipay/trade/order/settle/query | 交易分账查询接口


## `query()`

```php
query($settleNo, $outRequestNo, $tradeNo): \Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleQueryResponseModel
```

交易分账查询接口

根据分账请求号查询交易分账结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeOrderSettleApi(
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

$settleNo = 20210706002530020036530021395831; // string | 支付宝分账请求单号，传入该字段，无需再传外部请求号和支付宝交易号
$outRequestNo = 20210727001; // string | 调用分账接口时指定的外部请求号。分账查询时需要和支付宝交易号一起传入
$tradeNo = 2021112611001004680 073956707; // string | 支付宝交易号，传入该字段，需要和外部请求号一起传入

try {
    $result = $apiInstance->query($settleNo, $outRequestNo, $tradeNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeOrderSettleApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settleNo** | **string**| 支付宝分账请求单号，传入该字段，无需再传外部请求号和支付宝交易号 | [optional]
 **outRequestNo** | **string**| 调用分账接口时指定的外部请求号。分账查询时需要和支付宝交易号一起传入 | [optional]
 **tradeNo** | **string**| 支付宝交易号，传入该字段，需要和外部请求号一起传入 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
