# Alipay\OpenAPISDK\AlipayEbppInvoiceSyncSimpleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayEbppInvoiceSyncSimpleApi.md#send) | **POST** /v3/alipay/ebpp/invoice/sync/simple/send | 简单模式发票回传接口


## `send()`

```php
send($alipayEbppInvoiceSyncSimpleSendModel): object
```

简单模式发票回传接口

商户或ISV将发票信息发送至发票管家。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceSyncSimpleApi(
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

$alipayEbppInvoiceSyncSimpleSendModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSyncSimpleSendModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSyncSimpleSendModel

try {
    $result = $apiInstance->send($alipayEbppInvoiceSyncSimpleSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceSyncSimpleApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceSyncSimpleSendModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSyncSimpleSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
