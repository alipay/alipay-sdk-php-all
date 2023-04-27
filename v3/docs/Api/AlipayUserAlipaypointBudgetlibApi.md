# Alipay\OpenAPISDK\AlipayUserAlipaypointBudgetlibApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayUserAlipaypointBudgetlibApi.md#query) | **GET** /v3/alipay/user/alipaypoint/budgetlib/query | 查询集分宝预算库详情


## `query()`

```php
query($budgetCode): \Alipay\OpenAPISDK\Model\AlipayUserAlipaypointBudgetlibQueryResponseModel
```

查询集分宝预算库详情

用于查询集分宝预算库详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAlipaypointBudgetlibApi(
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

$budgetCode = 20201107050844; // string | 集分宝预算库编码

try {
    $result = $apiInstance->query($budgetCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAlipaypointBudgetlibApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budgetCode** | **string**| 集分宝预算库编码 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAlipaypointBudgetlibQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
