# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenseProgressApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEbppInvoiceExpenseProgressApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/expense/progress/sync | 发票报销处理进度同步


## `sync()`

```php
sync($alipayEbppInvoiceExpenseProgressSyncModel): object
```

发票报销处理进度同步

用户提交发票管家发票到isv申请报销后，isv对报销处理进度推进

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenseProgressApi(
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

$alipayEbppInvoiceExpenseProgressSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenseProgressSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenseProgressSyncModel

try {
    $result = $apiInstance->sync($alipayEbppInvoiceExpenseProgressSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenseProgressApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenseProgressSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenseProgressSyncModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
