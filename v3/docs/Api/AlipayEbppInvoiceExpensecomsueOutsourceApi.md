# Alipay\OpenAPISDK\AlipayEbppInvoiceExpensecomsueOutsourceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notify()**](AlipayEbppInvoiceExpensecomsueOutsourceApi.md#notify) | **POST** /v3/alipay/ebpp/invoice/expensecomsue/outsource/notify | 同步外部额度变更（交易形式）


## `notify()`

```php
notify($alipayEbppInvoiceExpensecomsueOutsourceNotifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecomsueOutsourceNotifyResponseModel
```

同步外部额度变更（交易形式）

外部和企业码进行额度共管的时候，外部以交易的形式（支付、退款）将外部发生的额度变更同步给企业码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecomsueOutsourceApi(
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

$alipayEbppInvoiceExpensecomsueOutsourceNotifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel

try {
    $result = $apiInstance->notify($alipayEbppInvoiceExpensecomsueOutsourceNotifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecomsueOutsourceApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecomsueOutsourceNotifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecomsueOutsourceNotifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecomsueOutsourceNotifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
