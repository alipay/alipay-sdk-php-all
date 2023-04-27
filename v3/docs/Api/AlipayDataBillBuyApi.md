# Alipay\OpenAPISDK\AlipayDataBillBuyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillBuyApi.md#query) | **GET** /v3/alipay/data/bill/buy/query | 支付宝商家账户买入交易查询


## `query()`

```php
query($startTime, $endTime, $alipayOrderNo, $merchantOrderNo, $storeNo, $pageNo, $pageSize): \Alipay\OpenAPISDK\Model\AlipayDataBillBuyQueryResponseModel
```

支付宝商家账户买入交易查询

为支付宝商家提供支付宝账户买入交易信息，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillBuyApi(
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

$startTime = 2019-01-01 00:00:00; // string | 交易流水创建时间的起始范围
$endTime = 2019-01-02 00:00:00; // string | 交易流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间
$alipayOrderNo = 20190101***; // string | 支付宝交易流水号。如果查询参数中指定流水号，则只查询流水号相关的记录
$merchantOrderNo = TX***; // string | 商户交易号。如果查询参数中指定交易号，则只查询相关的记录
$storeNo = 门店1; // string | 门店编号，模糊搜索
$pageNo = 1; // string | 分页号，从1开始
$pageSize = 2000; // string | 分页大小1000-2000，默认2000

try {
    $result = $apiInstance->query($startTime, $endTime, $alipayOrderNo, $merchantOrderNo, $storeNo, $pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillBuyApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 交易流水创建时间的起始范围 | [optional]
 **endTime** | **string**| 交易流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间 | [optional]
 **alipayOrderNo** | **string**| 支付宝交易流水号。如果查询参数中指定流水号，则只查询流水号相关的记录 | [optional]
 **merchantOrderNo** | **string**| 商户交易号。如果查询参数中指定交易号，则只查询相关的记录 | [optional]
 **storeNo** | **string**| 门店编号，模糊搜索 | [optional]
 **pageNo** | **string**| 分页号，从1开始 | [optional]
 **pageSize** | **string**| 分页大小1000-2000，默认2000 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillBuyQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
