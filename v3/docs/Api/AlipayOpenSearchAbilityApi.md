# Alipay\OpenAPISDK\AlipayOpenSearchAbilityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenSearchAbilityApi.md#batchquery) | **POST** /v3/alipay/open/search/ability/batchquery | 搜索运营列表分页查询


## `batchquery()`

```php
batchquery($alipayOpenSearchAbilityBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchAbilityBatchqueryResponseModel
```

搜索运营列表分页查询

搜索运营列表分页查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAbilityApi(
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

$alipayOpenSearchAbilityBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchAbilityBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchAbilityBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenSearchAbilityBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAbilityApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchAbilityBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchAbilityBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchAbilityBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
