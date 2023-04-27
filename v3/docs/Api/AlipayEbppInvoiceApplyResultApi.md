# Alipay\OpenAPISDK\AlipayEbppInvoiceApplyResultApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEbppInvoiceApplyResultApi.md#sync) | **POST** /v3/alipay/ebpp/invoice/apply/result/sync | ISV向支付宝同步发票申请结果


## `sync()`

```php
sync($alipayEbppInvoiceApplyResultSyncModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyResultSyncResponseModel
```

ISV向支付宝同步发票申请结果

ISV向支付宝同步发票申请结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceApplyResultApi(
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

$alipayEbppInvoiceApplyResultSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyResultSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyResultSyncModel

try {
    $result = $apiInstance->sync($alipayEbppInvoiceApplyResultSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceApplyResultApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceApplyResultSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyResultSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyResultSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
