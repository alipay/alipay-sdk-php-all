# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseMerchantrelationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceEnterpriseMerchantrelationApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterprise/merchantrelation/create | 创建企业商户关系


## `create()`

```php
create($enterpriseId, $alipayEbppInvoiceEnterpriseMerchantrelationCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseMerchantrelationCreateResponseModel
```

创建企业商户关系

根据交易流水号创建企业商户绑定关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseMerchantrelationApi(
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

$enterpriseId = 2088xxx; // string | 企业ID
$alipayEbppInvoiceEnterpriseMerchantrelationCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseMerchantrelationCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseMerchantrelationCreateModel

try {
    $result = $apiInstance->create($enterpriseId, $alipayEbppInvoiceEnterpriseMerchantrelationCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseMerchantrelationApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **alipayEbppInvoiceEnterpriseMerchantrelationCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseMerchantrelationCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseMerchantrelationCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
