# Alipay\OpenAPISDK\AlipayOfflineMarketShopSummaryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOfflineMarketShopSummaryApi.md#batchquery) | **POST** /v3/alipay/offline/market/shop/summary/batchquery | 门店摘要信息批量查询接口


## `batchquery()`

```php
batchquery($alipayOfflineMarketShopSummaryBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopSummaryBatchqueryResponseModel
```

门店摘要信息批量查询接口

用于进行门店摘要信息批量查询接口。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopSummaryApi(
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

$alipayOfflineMarketShopSummaryBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopSummaryBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopSummaryBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOfflineMarketShopSummaryBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopSummaryApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOfflineMarketShopSummaryBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopSummaryBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopSummaryBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
