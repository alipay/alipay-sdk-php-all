# Alipay\OpenAPISDK\AlipayEbppInvoiceListExpenseApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEbppInvoiceListExpenseApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/list/expense/sync | 报销状态批量同步开放接口


## `sync()`

```php
sync($alipayEbppInvoiceListExpenseSyncModel): object
```

报销状态批量同步开放接口

报销状态节点状态批量同步时调用该接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceListExpenseApi(
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

$alipayEbppInvoiceListExpenseSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceListExpenseSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceListExpenseSyncModel

try {
    $result = $apiInstance->sync($alipayEbppInvoiceListExpenseSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceListExpenseApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceListExpenseSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceListExpenseSyncModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
