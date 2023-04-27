# Alipay\OpenAPISDK\AlipayEbppInvoiceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sycn()**](AlipayEbppInvoiceApi.md#sycn) | **POST** /v3/alipay/ebpp/invoice/sycn | 发票信息同步至支付宝


## `sycn()`

```php
sycn($alipayEbppInvoiceSycnModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSycnResponseModel
```

发票信息同步至支付宝

外部商户开蓝票/冲红执行成功后将发票信息及原件（如有）同步至支付宝，由支付宝通知用户查看已开具的发票。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceApi(
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

$alipayEbppInvoiceSycnModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSycnModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSycnModel

try {
    $result = $apiInstance->sycn($alipayEbppInvoiceSycnModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceApi->sycn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceSycnModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSycnModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceSycnResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
