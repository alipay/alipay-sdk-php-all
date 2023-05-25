# Alipay\OpenAPISDK\AlipayEbppInvoiceEcorderOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceEcorderOrderApi.md#query) | **GET** /v3/alipay/ebpp/invoice/ecorder/order/query | 企业码订单查询


## `query()`

```php
query($enterpriseId, $accountId, $agreementNo, $orderId, $orderType): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEcorderOrderQueryResponseModel
```

企业码订单查询

企业码订单查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEcorderOrderApi(
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

$enterpriseId = 2088501296144291; // string | 企业ID
$accountId = 2088000000000000; // string | 共同账户ID
$agreementNo = 20200000000000000000; // string | 授权签约协议号
$orderId = 2020103022000000000000000000; // string | 订单ID
$orderType = METRO; // string | 订单类型

try {
    $result = $apiInstance->query($enterpriseId, $accountId, $agreementNo, $orderId, $orderType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEcorderOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **accountId** | **string**| 共同账户ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **orderId** | **string**| 订单ID | [optional]
 **orderType** | **string**| 订单类型 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEcorderOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
