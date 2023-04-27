# Alipay\OpenAPISDK\AlipayEbppInvoiceInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayEbppInvoiceInfoApi.md#send) | **POST** /v3/alipay/ebpp/invoice/info/send | 发票信息回传接口（新版）


## `send()`

```php
send($alipayEbppInvoiceInfoSendModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInfoSendResponseModel
```

发票信息回传接口（新版）

商户或ISV将发票信息发送至发票管家。例如：商户为用户开出发票之后，通过该接口将发票发送到买家支付宝的发票管家中，买家可在发票管家中查看发票。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInfoApi(
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

$alipayEbppInvoiceInfoSendModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInfoSendModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInfoSendModel

try {
    $result = $apiInstance->send($alipayEbppInvoiceInfoSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInfoApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInfoSendModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInfoSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInfoSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
