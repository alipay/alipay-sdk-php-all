# Alipay\OpenAPISDK\AlipayCommerceEcBalanceDownloadurlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcBalanceDownloadurlApi.md#query) | **GET** /v3/alipay/commerce/ec/balance/downloadurl/query | 对账单文件下载接口


## `query()`

```php
query($enterpriseId, $accountId, $agreementNo, $billType, $billDate): \Alipay\OpenAPISDK\Model\AlipayCommerceEcBalanceDownloadurlQueryResponseModel
```

对账单文件下载接口

对账单文件下载接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcBalanceDownloadurlApi(
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

$enterpriseId = 100000000000001000921; // string | 企业ID
$accountId = 2088000295356628; // string | 共同账户ID，没有企业ID可以用此ID查询
$agreementNo = 20205820659822371223; // string | 授权签约协议号，以共同账户ID查询时必传
$billType = enterprisetrade; // string | 账单类型，商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型，支持： enterprisetrade：商户基于企业码交易收单的业务账单;
$billDate = 2022-06-22; // string | 账单时间： 日账单格式为yyyy-MM-dd，最早可下载2016年1月1日开始的日账单。不支持下载当日账单，只能下载前一日24点前的账单数据（T+1），当日数据一般于次日 9 点前生成，特殊情况可能延迟。 月账单格式为yyyy-MM，最早可下载2016年1月开始的月账单。不支持下载当月账单，只能下载上一月账单数据，当月账单一般在次月 3 日生成，特殊情况可能延迟。

try {
    $result = $apiInstance->query($enterpriseId, $accountId, $agreementNo, $billType, $billDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcBalanceDownloadurlApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **accountId** | **string**| 共同账户ID，没有企业ID可以用此ID查询 | [optional]
 **agreementNo** | **string**| 授权签约协议号，以共同账户ID查询时必传 | [optional]
 **billType** | **string**| 账单类型，商户通过接口或商户经开放平台授权后其所属服务商通过接口可以获取以下账单类型，支持： enterprisetrade：商户基于企业码交易收单的业务账单; | [optional]
 **billDate** | **string**| 账单时间： 日账单格式为yyyy-MM-dd，最早可下载2016年1月1日开始的日账单。不支持下载当日账单，只能下载前一日24点前的账单数据（T+1），当日数据一般于次日 9 点前生成，特殊情况可能延迟。 月账单格式为yyyy-MM，最早可下载2016年1月开始的月账单。不支持下载当月账单，只能下载上一月账单数据，当月账单一般在次月 3 日生成，特殊情况可能延迟。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcBalanceDownloadurlQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
