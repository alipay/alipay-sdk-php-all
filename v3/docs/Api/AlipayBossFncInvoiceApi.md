# Alipay\OpenAPISDK\AlipayBossFncInvoiceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayBossFncInvoiceApi.md#apply) | **POST** /v3/alipay/boss/fnc/invoice/apply | 应收开票申请(根据账单申请)
[**batchquery()**](AlipayBossFncInvoiceApi.md#batchquery) | **POST** /v3/alipay/boss/fnc/invoice/batchquery | 应收发票综合查询
[**query()**](AlipayBossFncInvoiceApi.md#query) | **GET** /v3/alipay/boss/fnc/invoice/query | 根据发票ID查询发票信息


## `apply()`

```php
apply($alipayBossFncInvoiceApplyModel): \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceApplyResponseModel
```

应收开票申请(根据账单申请)

根据账单申请应收发票开票

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncInvoiceApi(
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

$alipayBossFncInvoiceApplyModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceApplyModel

try {
    $result = $apiInstance->apply($alipayBossFncInvoiceApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncInvoiceApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncInvoiceApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `batchquery()`

```php
batchquery($alipayBossFncInvoiceBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceBatchqueryResponseModel
```

应收发票综合查询

根据综合查询条件查询对应发票信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncInvoiceApi(
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

$alipayBossFncInvoiceBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayBossFncInvoiceBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncInvoiceApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncInvoiceBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($invoiceId): \Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceQueryResponseModel
```

根据发票ID查询发票信息

根据发票综合查询接口（alipay.boss.fnc.invoice.batchquery）查询到发票列表后，再根据每个发票对应的发票id查询发票的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncInvoiceApi(
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

$invoiceId = 如：2017060210122000040400270002815483; // string | 查询ID：用于标示一张发票，通过发票综合查询可以查询到该ID。

try {
    $result = $apiInstance->query($invoiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncInvoiceApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceId** | **string**| 查询ID：用于标示一张发票，通过发票综合查询可以查询到该ID。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncInvoiceQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
