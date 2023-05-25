# Alipay\OpenAPISDK\AlipayEbppInvoiceExpensesceneMerchantApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceExpensesceneMerchantApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expensescene/merchant/query | 查询企业可用商户信息


## `query()`

```php
query($accountId, $agreementNo, $enterpriseId, $roleId, $pid, $shopId, $expenseType, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensesceneMerchantQueryResponseModel
```

查询企业可用商户信息

查询企业可用商户信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensesceneMerchantApi(
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

$accountId = 2088xxx; // string | 共同账户ID
$agreementNo = 20215713002876184996; // string | 授权签约协议号
$enterpriseId = 2088xxx; // string | 企业ID
$roleId = 2088xxx; // string | 商户ID
$pid = 2088xxx; // string | 商户ID
$shopId = 2088xxx; // string | 门店ID
$expenseType = MEAL; // string | 费用类型 MEAL - 工作餐
$pageNum = 1; // int | 页码
$pageSize = 20; // int | 每页行数（最大100）

try {
    $result = $apiInstance->query($accountId, $agreementNo, $enterpriseId, $roleId, $pid, $shopId, $expenseType, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensesceneMerchantApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 共同账户ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **enterpriseId** | **string**| 企业ID | [optional]
 **roleId** | **string**| 商户ID | [optional]
 **pid** | **string**| 商户ID | [optional]
 **shopId** | **string**| 门店ID | [optional]
 **expenseType** | **string**| 费用类型 MEAL - 工作餐 | [optional]
 **pageNum** | **int**| 页码 | [optional]
 **pageSize** | **int**| 每页行数（最大100） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensesceneMerchantQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
