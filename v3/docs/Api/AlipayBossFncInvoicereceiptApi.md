# Alipay\OpenAPISDK\AlipayBossFncInvoicereceiptApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayBossFncInvoicereceiptApi.md#batchquery) | **POST** /v3/alipay/boss/fnc/invoicereceipt/batchquery | 根据月账单号集合和来源查询开票单据及金额汇总
[**create()**](AlipayBossFncInvoicereceiptApi.md#create) | **POST** /v3/alipay/boss/fnc/invoicereceipt/create | 账单变更同步接口月帐单创建消息同步


## `batchquery()`

```php
batchquery($alipayBossFncInvoicereceiptBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptBatchqueryResponseModel
```

根据月账单号集合和来源查询开票单据及金额汇总

根据月账单号集合和来源查询开票单据及金额汇总

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncInvoicereceiptApi(
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

$alipayBossFncInvoicereceiptBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayBossFncInvoicereceiptBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncInvoicereceiptApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncInvoicereceiptBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayBossFncInvoicereceiptCreateModel): object
```

账单变更同步接口月帐单创建消息同步

月帐单创建消息同步

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncInvoicereceiptApi(
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

$alipayBossFncInvoicereceiptCreateModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptCreateModel

try {
    $result = $apiInstance->create($alipayBossFncInvoicereceiptCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncInvoicereceiptApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncInvoicereceiptCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncInvoicereceiptCreateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
