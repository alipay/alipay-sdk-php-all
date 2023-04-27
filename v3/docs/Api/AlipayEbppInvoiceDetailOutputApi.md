# Alipay\OpenAPISDK\AlipayEbppInvoiceDetailOutputApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceDetailOutputApi.md#query) | **POST** /v3/alipay/ebpp/invoice/detail/output/query | 获取发票详细信息


## `query()`

```php
query($alipayEbppInvoiceDetailOutputQueryModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceDetailOutputQueryResponseModel
```

获取发票详细信息

根据发票代码，发票号码获取发票详细信息  查询权限要求：  发票属于当前isv报销单据进行状态（支持的状态有  EXPENSE_APPLY－用户已提交申请  EXPENSE_APPROVAL_PASS －报销审核通过  EXPENSE_FINISHED－报销完结）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceDetailOutputApi(
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

$alipayEbppInvoiceDetailOutputQueryModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceDetailOutputQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceDetailOutputQueryModel

try {
    $result = $apiInstance->query($alipayEbppInvoiceDetailOutputQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceDetailOutputApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceDetailOutputQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceDetailOutputQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceDetailOutputQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
