# Alipay\OpenAPISDK\AntMerchantExpandApprecommendAvailableApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AntMerchantExpandApprecommendAvailableApi.md#query) | **GET** /v3/ant/merchant/expand/apprecommend/available/query | 查询可关联APP的账号列表


## `query()`

```php
query($pageSize, $pageNumber): \Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAvailableQueryResponseModel
```

查询可关联APP的账号列表

查询可关联APP的账号列表，用于支付推荐场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandApprecommendAvailableApi(
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

$pageSize = 10; // int | 单页行数，不能超过100行
$pageNumber = 1; // int | 页码

try {
    $result = $apiInstance->query($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandApprecommendAvailableApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| 单页行数，不能超过100行 | [optional]
 **pageNumber** | **int**| 页码 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAvailableQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
