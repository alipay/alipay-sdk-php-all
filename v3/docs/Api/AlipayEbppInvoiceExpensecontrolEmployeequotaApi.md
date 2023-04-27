# Alipay\OpenAPISDK\AlipayEbppInvoiceExpensecontrolEmployeequotaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceExpensecontrolEmployeequotaApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/employeequota/create | 创建余额（特定场景）


## `create()`

```php
create($alipayEbppInvoiceExpensecontrolEmployeequotaCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolEmployeequotaCreateResponseModel
```

创建余额（特定场景）

创建余额，该接口开放给特定场景。如果需要使用，请联系技术支持。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolEmployeequotaApi(
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

$alipayEbppInvoiceExpensecontrolEmployeequotaCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceExpensecontrolEmployeequotaCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolEmployeequotaApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolEmployeequotaCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolEmployeequotaCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolEmployeequotaCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
