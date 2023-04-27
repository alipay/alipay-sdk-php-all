# Alipay\OpenAPISDK\AlipayCommerceLogisticsWaybillIstddetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceLogisticsWaybillIstddetailApi.md#query) | **GET** /v3/alipay/commerce/logistics/waybill/istddetail/query | 查询即时配送运单详情


## `query()`

```php
query($shopNo, $outOrderNo, $orderNo, $logisticsCode, $waybillNo): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsWaybillIstddetailQueryResponseModel
```

查询即时配送运单详情

查询即时配送运单详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsWaybillIstddetailApi(
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

$shopNo = shopno001; // string | 商家门店编号
$outOrderNo = 2020090411140000000000777000216122; // string | 商家订单号
$orderNo = 2020090411130000000000772400280352; // string | 支付宝订单流水号
$logisticsCode = FENGNIAO; // string | 即时配送公司编码
$waybillNo = waybillno001; // string | 即时配送运单编号

try {
    $result = $apiInstance->query($shopNo, $outOrderNo, $orderNo, $logisticsCode, $waybillNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsWaybillIstddetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopNo** | **string**| 商家门店编号 | [optional]
 **outOrderNo** | **string**| 商家订单号 | [optional]
 **orderNo** | **string**| 支付宝订单流水号 | [optional]
 **logisticsCode** | **string**| 即时配送公司编码 | [optional]
 **waybillNo** | **string**| 即时配送运单编号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsWaybillIstddetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
