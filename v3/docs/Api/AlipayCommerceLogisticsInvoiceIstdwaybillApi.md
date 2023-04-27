# Alipay\OpenAPISDK\AlipayCommerceLogisticsInvoiceIstdwaybillApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayCommerceLogisticsInvoiceIstdwaybillApi.md#create) | **POST** /v3/alipay/commerce/logistics/invoice/istdwaybill/create | 开即时配送订单发票
[**query()**](AlipayCommerceLogisticsInvoiceIstdwaybillApi.md#query) | **GET** /v3/alipay/commerce/logistics/invoice/istdwaybill/query | 查询即时配送订单的开票结果


## `create()`

```php
create($alipayCommerceLogisticsInvoiceIstdwaybillCreateModel): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillCreateResponseModel
```

开即时配送订单发票

开即时配送订单发票

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsInvoiceIstdwaybillApi(
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

$alipayCommerceLogisticsInvoiceIstdwaybillCreateModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillCreateModel

try {
    $result = $apiInstance->create($alipayCommerceLogisticsInvoiceIstdwaybillCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsInvoiceIstdwaybillApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceLogisticsInvoiceIstdwaybillCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($logisticsCode, $outInvoiceRequestNo): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillQueryResponseModel
```

查询即时配送订单的开票结果

查询即时配送订单的开票结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsInvoiceIstdwaybillApi(
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

$logisticsCode = FENGNIAO; // string | 即时配送公司编码
$outInvoiceRequestNo = out_invoice_no_00001; // string | 开票请求流水号

try {
    $result = $apiInstance->query($logisticsCode, $outInvoiceRequestNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsInvoiceIstdwaybillApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logisticsCode** | **string**| 即时配送公司编码 | [optional]
 **outInvoiceRequestNo** | **string**| 开票请求流水号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsInvoiceIstdwaybillQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
