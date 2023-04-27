# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseconsumeConsumeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayEbppInvoiceEnterpriseconsumeConsumeApi.md#batchquery) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/consume/batchquery | 企业因公账单查询


## `batchquery()`

```php
batchquery($alipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryResponseModel
```

企业因公账单查询

基于企业ID和员工UID，在指定时间段（时间间隔不超过24小时）内获取因公账单数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeConsumeApi(
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

$alipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeConsumeApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeConsumeBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
