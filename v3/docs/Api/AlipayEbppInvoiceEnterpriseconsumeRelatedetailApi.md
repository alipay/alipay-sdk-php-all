# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/relatedetail/query | 合花账单关联详情查询


## `query()`

```php
query($accountId, $agreementNo, $voucherId): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeRelatedetailQueryResponseModel
```

合花账单关联详情查询

合花账单关联详情查询，通过凭证ID获取这个账单详细信息和关联的凭证详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi(
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

$accountId = 2088123456789000; // string | 企业ID
$agreementNo = 20205820659822371223; // string | 授权签约协议号
$voucherId = 2020123100152601930000003650; // string | 账单凭证ID

try {
    $result = $apiInstance->query($accountId, $agreementNo, $voucherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeRelatedetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **voucherId** | **string**| 账单凭证ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeRelatedetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
