# Alipay\OpenAPISDK\AlipayEbppInvoiceFileOutputApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceFileOutputApi.md#query) | **GET** /v3/alipay/ebpp/invoice/file/output/query | 获取电子发票原文件


## `query()`

```php
query($userId, $openId, $invoiceCode, $invoiceNo, $scene, $skipExpenseProgressSync): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceFileOutputQueryResponseModel
```

获取电子发票原文件

根据发票代码，发票号码获取用户的普通增值税电子发票pdf文件  查询权限要求： 发票属于当前isv报销单据进行状态（支持的状态有 EXPENSE_APPLY－用户已提交申请 EXPENSE_APPROVAL_PASS －报销审核通过 EXPENSE_FINISHED－报销完结）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceFileOutputApi(
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

$userId = 2088550000000; // string | 发票归属用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 发票归属用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$invoiceCode = 123; // string | 发票代码 字段长度（10-12位），全电票时为空
$invoiceNo = 111; // string | 发票号码 字段长度（8-10位），全电票时为20位
$scene = INVOICE_EXPENSE; // string | 发票pdf文件下载应用场景。固定为 INVOICE_EXPENSE  表示发票报销。
$skipExpenseProgressSync = false; // bool | 是否跳过发票报销状态同步；当为true时，跳过报销状态同步校验。默认为false，需要先做报销状态同步

try {
    $result = $apiInstance->query($userId, $openId, $invoiceCode, $invoiceNo, $scene, $skipExpenseProgressSync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceFileOutputApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 发票归属用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **openId** | **string**| 发票归属用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **invoiceCode** | **string**| 发票代码 字段长度（10-12位），全电票时为空 | [optional]
 **invoiceNo** | **string**| 发票号码 字段长度（8-10位），全电票时为20位 | [optional]
 **scene** | **string**| 发票pdf文件下载应用场景。固定为 INVOICE_EXPENSE  表示发票报销。 | [optional]
 **skipExpenseProgressSync** | **bool**| 是否跳过发票报销状态同步；当为true时，跳过报销状态同步校验。默认为false，需要先做报销状态同步 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceFileOutputQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
