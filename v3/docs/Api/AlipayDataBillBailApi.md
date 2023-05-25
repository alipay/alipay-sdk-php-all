# Alipay\OpenAPISDK\AlipayDataBillBailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataBillBailApi.md#query) | **GET** /v3/alipay/data/bill/bail/query | 支付宝商家账户保证金查询


## `query()`

```php
query($startTime, $endTime, $bailType, $transLogId, $bizOrigNo): \Alipay\OpenAPISDK\Model\AlipayDataBillBailQueryResponseModel
```

支付宝商家账户保证金查询

为支付宝商家提供支付宝账户保证金信息，供对账使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillBailApi(
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

$startTime = 2019-01-01 00:00:00; // string | 保证金流水创建时间的起始范围
$endTime = 2019-01-02 00:00:00; // string | 保证金流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间
$bailType = TMALL_S_BAIL; // string | 保证金类型，目前支持TMALL_S_BAIL-天猫保证金，TAOBAO_BAIL-淘宝保证金
$transLogId = 20190101***; // string | 保证金流水号。如果查询参数中指定流水号，则只查询流水号相关的记录
$bizOrigNo = 1***; // string | 业务基础订单号。如果查询参数中指定订单号，则只查询相关的记录

try {
    $result = $apiInstance->query($startTime, $endTime, $bailType, $transLogId, $bizOrigNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillBailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **string**| 保证金流水创建时间的起始范围 | [optional]
 **endTime** | **string**| 保证金流水创建时间的结束范围。与起始时间间隔不超过31天。查询结果为起始时间至结束时间的左闭右开区间 | [optional]
 **bailType** | **string**| 保证金类型，目前支持TMALL_S_BAIL-天猫保证金，TAOBAO_BAIL-淘宝保证金 | [optional]
 **transLogId** | **string**| 保证金流水号。如果查询参数中指定流水号，则只查询流水号相关的记录 | [optional]
 **bizOrigNo** | **string**| 业务基础订单号。如果查询参数中指定订单号，则只查询相关的记录 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillBailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
