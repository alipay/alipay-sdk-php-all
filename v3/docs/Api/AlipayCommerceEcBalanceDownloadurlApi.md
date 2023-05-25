# Alipay\OpenAPISDK\AlipayCommerceEcBalanceDownloadurlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcBalanceDownloadurlApi.md#query) | **GET** /v3/alipay/commerce/ec/balance/downloadurl/query | 对账单文件下载接口


## `query()`

```php
query($enterpriseId, $accountId, $agreementNo, $billType, $billDate): \Alipay\OpenAPISDK\Model\AlipayCommerceEcBalanceDownloadurlQueryResponseModel
```

对账单文件下载接口

对账单文件下载接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcBalanceDownloadurlApi(
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

$enterpriseId = 2088123456789000; // string | 企业ID
$accountId = 2088000295356628; // string | 共同账户ID
$agreementNo = 20205820659822371223; // string | 授权签约协议号
$billType = enterprisetrade; // string | 账单类型
$billDate = yyyy-MM-dd; // string | 账单时间

try {
    $result = $apiInstance->query($enterpriseId, $accountId, $agreementNo, $billType, $billDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcBalanceDownloadurlApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **accountId** | **string**| 共同账户ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **billType** | **string**| 账单类型 | [optional]
 **billDate** | **string**| 账单时间 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcBalanceDownloadurlQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
