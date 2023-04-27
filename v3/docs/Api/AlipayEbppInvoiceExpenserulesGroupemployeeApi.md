# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesGroupemployeeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEbppInvoiceExpenserulesGroupemployeeApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/groupemployee/modify | 修改费控规则员工


## `modify()`

```php
modify($alipayEbppInvoiceExpenserulesGroupemployeeModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesGroupemployeeModifyResponseModel
```

修改费控规则员工

修改费控规则员工

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesGroupemployeeApi(
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

$alipayEbppInvoiceExpenserulesGroupemployeeModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceExpenserulesGroupemployeeModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesGroupemployeeApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesGroupemployeeModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesGroupemployeeModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesGroupemployeeModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
