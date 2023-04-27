# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesEmployeeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceExpenserulesEmployeeApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/employee/query | 查询费控规则员工


## `query()`

```php
query($accountId, $agreementNo, $enterpriseId, $standardId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesEmployeeQueryResponseModel
```

查询费控规则员工

查询费控规则员工

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesEmployeeApi(
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

$accountId = 2088123456789000; // string | 共同账号ID
$agreementNo = 20205820659822371223; // string | 授权签约协议号
$enterpriseId = 2088000194958956; // string | 企业码企业id
$standardId = 2021081900152601000000000101; // string | 费控规则ID
$pageNum = 1; // int | 页数
$pageSize = 20; // int | 页大小

try {
    $result = $apiInstance->query($accountId, $agreementNo, $enterpriseId, $standardId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesEmployeeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 共同账号ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **enterpriseId** | **string**| 企业码企业id | [optional]
 **standardId** | **string**| 费控规则ID | [optional]
 **pageNum** | **int**| 页数 | [optional]
 **pageSize** | **int**| 页大小 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesEmployeeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
