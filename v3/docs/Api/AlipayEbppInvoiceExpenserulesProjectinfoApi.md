# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesProjectinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEbppInvoiceExpenserulesProjectinfoApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectinfo/modify | 修改项目基础信息


## `modify()`

```php
modify($alipayEbppInvoiceExpenserulesProjectinfoModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectinfoModifyResponseModel
```

修改项目基础信息

修改项目基础信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesProjectinfoApi(
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

$alipayEbppInvoiceExpenserulesProjectinfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectinfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectinfoModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceExpenserulesProjectinfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesProjectinfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesProjectinfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectinfoModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectinfoModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
