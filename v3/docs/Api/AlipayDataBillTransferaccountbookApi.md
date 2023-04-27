# Alipay\OpenAPISDK\AlipayDataBillTransferaccountbookApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillTransferaccountbookApi.md#query) | **GET** /v3/alipay/data/bill/transferaccountbook/query | 子账本充提转账单查询(incubating)


## `query()`

```php
query($startTime, $endTime, $type, $agreementNo, $storeNo, $pageNo, $pageSize): \Alipay\OpenAPISDK\Model\AlipayDataBillTransferaccountbookQueryResponseModel
```

子账本充提转账单查询(incubating)

子账本充提转账单查询（子账本业务定制接口）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillTransferaccountbookApi(
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

$startTime = 2019-01-01 00:00:00; // string | 充值、转账、提现流水业务时间的起始范围
$endTime = 2019-01-02 00:00:00; // string | 充值、转账、提现流水业务时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间
$type = TRANSFER; // string | 转账类型：充值-DEPOSIT，提现-WITHDRAW，转账-TRANSFER。
$agreementNo = 20205215001418078112; // string | 协议号
$storeNo = 2088000117463004; // string | 子账本号，或者子账本名称。模糊查询
$pageNo = 1; // string | 分页号，从1开始
$pageSize = 2000; // string | 分页大小1000-2000，默认2000

try {
    $result = $apiInstance->query($startTime, $endTime, $type, $agreementNo, $storeNo, $pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillTransferaccountbookApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 充值、转账、提现流水业务时间的起始范围 | [optional]
 **endTime** | **string**| 充值、转账、提现流水业务时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间 | [optional]
 **type** | **string**| 转账类型：充值-DEPOSIT，提现-WITHDRAW，转账-TRANSFER。 | [optional]
 **agreementNo** | **string**| 协议号 | [optional]
 **storeNo** | **string**| 子账本号，或者子账本名称。模糊查询 | [optional]
 **pageNo** | **string**| 分页号，从1开始 | [optional]
 **pageSize** | **string**| 分页大小1000-2000，默认2000 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillTransferaccountbookQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
