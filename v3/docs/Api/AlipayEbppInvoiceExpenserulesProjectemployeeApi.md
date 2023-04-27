# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesProjectemployeeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEbppInvoiceExpenserulesProjectemployeeApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectemployee/modify | 修改项目的员工列表


## `modify()`

```php
modify($alipayEbppInvoiceExpenserulesProjectemployeeModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectemployeeModifyResponseModel
```

修改项目的员工列表

修改项目的员工列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesProjectemployeeApi(
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

$alipayEbppInvoiceExpenserulesProjectemployeeModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectemployeeModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectemployeeModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceExpenserulesProjectemployeeModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesProjectemployeeApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesProjectemployeeModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectemployeeModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectemployeeModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
