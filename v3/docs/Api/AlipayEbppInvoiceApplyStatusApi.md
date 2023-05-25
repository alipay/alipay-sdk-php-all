# Alipay\OpenAPISDK\AlipayEbppInvoiceApplyStatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notify()**](AlipayEbppInvoiceApplyStatusApi.md#notify) | **PUT** /v3/alipay/ebpp/invoice/apply/status/notify | 发票申请状态变更


## `notify()`

```php
notify($alipayEbppInvoiceApplyStatusNotifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyStatusNotifyResponseModel
```

发票申请状态变更

发票申请状态变更通知

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceApplyStatusApi(
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

$alipayEbppInvoiceApplyStatusNotifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyStatusNotifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyStatusNotifyModel

try {
    $result = $apiInstance->notify($alipayEbppInvoiceApplyStatusNotifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceApplyStatusApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceApplyStatusNotifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyStatusNotifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyStatusNotifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
