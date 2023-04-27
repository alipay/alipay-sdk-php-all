# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/summaryinvoicedetail/query | 查询汇总发票详情


## `query()`

```php
query($accountId, $agreementNo, $summaryId): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailQueryResponseModel
```

查询汇总发票详情

根据汇总开票通知拿到的开票批次ID查询汇总发票详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi(
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

$accountId = 2088000237836238; // string | 企业 ID
$agreementNo = 20205820659822371223; // string | 授权签约协议号
$summaryId = 2021080400152500230000000881; // string | 开票批次 ID

try {
    $result = $apiInstance->query($accountId, $agreementNo, $summaryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业 ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **summaryId** | **string**| 开票批次 ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeSummaryinvoicedetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
