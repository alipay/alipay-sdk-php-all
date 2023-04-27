# Alipay\OpenAPISDK\AlipayDataBillTransferApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillTransferApi.md#query) | **GET** /v3/alipay/data/bill/transfer/query | 支付宝商家账户充值，转账，提现查询


## `query()`

```php
query($startTime, $endTime, $type, $pageNo, $pageSize): \Alipay\OpenAPISDK\Model\AlipayDataBillTransferQueryResponseModel
```

支付宝商家账户充值，转账，提现查询

为支付宝商家提供支付宝账户充值，转账，提现信息，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillTransferApi(
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
$type = DEPOSIT; // string | 转账类型：充值-DEPOSIT，提现-WITHDRAW，转账-TRANSFER。
$pageNo = 1; // string | 分页号，从1开始
$pageSize = 2000; // string | 分页大小1000-2000，默认2000

try {
    $result = $apiInstance->query($startTime, $endTime, $type, $pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillTransferApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 充值、转账、提现流水业务时间的起始范围 | [optional]
 **endTime** | **string**| 充值、转账、提现流水业务时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间 | [optional]
 **type** | **string**| 转账类型：充值-DEPOSIT，提现-WITHDRAW，转账-TRANSFER。 | [optional]
 **pageNo** | **string**| 分页号，从1开始 | [optional]
 **pageSize** | **string**| 分页大小1000-2000，默认2000 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillTransferQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
