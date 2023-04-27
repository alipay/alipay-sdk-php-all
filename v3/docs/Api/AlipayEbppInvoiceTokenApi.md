# Alipay\OpenAPISDK\AlipayEbppInvoiceTokenApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayEbppInvoiceTokenApi.md#batchquery) | **GET** /v3/alipay/ebpp/invoice/token/batchquery | 根据查询令牌获取发票要素列表


## `batchquery()`

```php
batchquery($invoiceToken, $scene): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceTokenBatchqueryResponseModel
```

根据查询令牌获取发票要素列表

根据用户通过发票管家选择发票列表产生的请求令牌获取用户选择发票要素列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceTokenApi(
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

$invoiceToken = 0136d80096e34a07a528db7cc5bc442888s; // string | 查询请求令牌。通过唤起支付宝钱包后用户进入发票管家选择发票列表后创建，并通过isv接收url回传给isv。详见 <a href=\"https://opendocs.alipay.com/open/01m6z5\">\"选\"模式发票报销</a>。
$scene = INVOICE_EXPENSE; // string | 发票要素获取应用场景。固定为 INVOICE_EXPENSE 表示发票报销。

try {
    $result = $apiInstance->batchquery($invoiceToken, $scene);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceTokenApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceToken** | **string**| 查询请求令牌。通过唤起支付宝钱包后用户进入发票管家选择发票列表后创建，并通过isv接收url回传给isv。详见 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/open/01m6z5\&quot;&gt;\&quot;选\&quot;模式发票报销&lt;/a&gt;。 | [optional]
 **scene** | **string**| 发票要素获取应用场景。固定为 INVOICE_EXPENSE 表示发票报销。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceTokenBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
