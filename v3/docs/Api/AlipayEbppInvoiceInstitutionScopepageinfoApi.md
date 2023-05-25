# Alipay\OpenAPISDK\AlipayEbppInvoiceInstitutionScopepageinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceInstitutionScopepageinfoApi.md#query) | **GET** /v3/alipay/ebpp/invoice/institution/scopepageinfo/query | 分页查询制度下人员


## `query()`

```php
query($accountId, $agreementNo, $enterpriseId, $institutionId, $ownerType, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel
```

分页查询制度下人员

分页查询制度下适用范围列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionScopepageinfoApi(
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
$enterpriseId = 2088000194958956; // string | 企业id
$institutionId = 2022071800152609780000004052; // string | 制度id
$ownerType = PHONE; // string | 适配id类型
$pageNum = 10; // int | 页码
$pageSize = 100; // int | 页大小

try {
    $result = $apiInstance->query($accountId, $agreementNo, $enterpriseId, $institutionId, $ownerType, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionScopepageinfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业共同账户id | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **enterpriseId** | **string**| 企业id | [optional]
 **institutionId** | **string**| 制度id | [optional]
 **ownerType** | **string**| 适配id类型 | [optional]
 **pageNum** | **int**| 页码 | [optional]
 **pageSize** | **int**| 页大小 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
