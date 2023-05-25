# Alipay\OpenAPISDK\AlipayEbppInvoiceApplystatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceApplystatusApi.md#query) | **POST** /v3/alipay/ebpp/invoice/applystatus/query | 根据外部订单号查询开票状态


## `query()`

```php
query($alipayEbppInvoiceApplystatusQueryModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplystatusQueryResponseModel
```

根据外部订单号查询开票状态

根据外部订单号查询开票状态，仅有申请状态无完整票据信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceApplystatusApi(
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

$alipayEbppInvoiceApplystatusQueryModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplystatusQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplystatusQueryModel

try {
    $result = $apiInstance->query($alipayEbppInvoiceApplystatusQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceApplystatusApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceApplystatusQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplystatusQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplystatusQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
