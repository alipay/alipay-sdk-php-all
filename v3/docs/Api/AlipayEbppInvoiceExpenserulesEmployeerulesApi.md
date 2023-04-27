# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesEmployeerulesApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceExpenserulesEmployeerulesApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/employeerules/query | 查询员工绑定的所有费控规则


## `query()`

```php
query($accountId, $agreementNo, $employeeId, $employeeOpenId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesEmployeerulesQueryResponseModel
```

查询员工绑定的所有费控规则

分页查询指定员工绑定的所有费控规则，默认返回所有有效和无效规则，查询结果按费控规则的创建时间倒序

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesEmployeerulesApi(
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

$accountId = 208800019495xxxx; // string | 企业ID
$agreementNo = 2021542500111234xxxx; // string | 授权签约协议号
$employeeId = 208852286537xxxx; // string | 未切换open_id时使用此字段：员工ID
$employeeOpenId = abcdxxxx; // string | 切换open_id后使用此字段：员工的open_id
$pageNum = 1; // int | 页码，默认值为1
$pageSize = 20; // int | 每页行数，默认值为20

try {
    $result = $apiInstance->query($accountId, $agreementNo, $employeeId, $employeeOpenId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesEmployeerulesApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **employeeId** | **string**| 未切换open_id时使用此字段：员工ID | [optional]
 **employeeOpenId** | **string**| 切换open_id后使用此字段：员工的open_id | [optional]
 **pageNum** | **int**| 页码，默认值为1 | [optional]
 **pageSize** | **int**| 每页行数，默认值为20 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesEmployeerulesQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
