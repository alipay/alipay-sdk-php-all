# Alipay\OpenAPISDK\AlipayDataDataserviceBillDownloadurlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayDataDataserviceBillDownloadurlApi.md#query) | **GET** /v3/alipay/data/dataservice/bill/downloadurl/query | 查询对账单下载地址


## `query()`

```php
query($billType, $billDate, $smid): \Alipay\OpenAPISDK\Model\AlipayDataDataserviceBillDownloadurlQueryResponseModel
```

查询对账单下载地址

为方便商户快速查账，支持商户通过本接口获取商户离线账单下载地址

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataDataserviceBillDownloadurlApi(
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

$billType = trade; // string | 账单类型，商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型。
$billDate = 2016-04-05; // string | 账单时间：  * 日账单格式为yyyy-MM-dd，最早可下载2016年1月1日开始的日账单。不支持下载当日账单，只能下载前一日24点前的账单数据（T+1），当日数据一般于次日 9 点前生成，特殊情况可能延迟。  * 月账单格式为yyyy-MM，最早可下载2016年1月开始的月账单。不支持下载当月账单，只能下载上一月账单数据，当月账单一般在次月 3 日生成，特殊情况可能延迟。
$smid = 2088123412341234; // string | 二级商户smid，这个参数只在bill_type是trade_zft_merchant时才能使用

try {
    $result = $apiInstance->query($billType, $billDate, $smid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataDataserviceBillDownloadurlApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billType** | **string**| 账单类型，商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型。 | [optional]
 **billDate** | **string**| 账单时间：  * 日账单格式为yyyy-MM-dd，最早可下载2016年1月1日开始的日账单。不支持下载当日账单，只能下载前一日24点前的账单数据（T+1），当日数据一般于次日 9 点前生成，特殊情况可能延迟。  * 月账单格式为yyyy-MM，最早可下载2016年1月开始的月账单。不支持下载当月账单，只能下载上一月账单数据，当月账单一般在次月 3 日生成，特殊情况可能延迟。 | [optional]
 **smid** | **string**| 二级商户smid，这个参数只在bill_type是trade_zft_merchant时才能使用 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataDataserviceBillDownloadurlQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
