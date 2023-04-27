# Alipay\OpenAPISDK\AlipayEbppInvoiceInstitutionPageinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceInstitutionPageinfoApi.md#query) | **GET** /v3/alipay/ebpp/invoice/institution/pageinfo/query | 费控制度分页查询


## `query()`

```php
query($accountId, $agreementNo, $enterpriseId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionPageinfoQueryResponseModel
```

费控制度分页查询

制度分页查询，返回制度基本信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionPageinfoApi(
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

$accountId = 2088000194958956; // string | 企业共同账户id
$agreementNo = 20215425001112341234; // string | 授权签约协议号
$enterpriseId = 2088000194958956; // string | 企业ID
$pageNum = 10; // int | 页码
$pageSize = 100; // int | 页大小

try {
    $result = $apiInstance->query($accountId, $agreementNo, $enterpriseId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionPageinfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业共同账户id | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **enterpriseId** | **string**| 企业ID | [optional]
 **pageNum** | **int**| 页码 | [optional]
 **pageSize** | **int**| 页大小 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionPageinfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
