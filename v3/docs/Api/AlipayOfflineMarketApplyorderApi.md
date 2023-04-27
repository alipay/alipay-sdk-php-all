# Alipay\OpenAPISDK\AlipayOfflineMarketApplyorderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOfflineMarketApplyorderApi.md#batchquery) | **POST** /v3/alipay/offline/market/applyorder/batchquery | 业务流水批量查询接口


## `batchquery()`

```php
batchquery($alipayOfflineMarketApplyorderBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketApplyorderBatchqueryResponseModel
```

业务流水批量查询接口

通过该接口分页查询Leads、门店、商品相关操作流水信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketApplyorderApi(
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

$alipayOfflineMarketApplyorderBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOfflineMarketApplyorderBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOfflineMarketApplyorderBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOfflineMarketApplyorderBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketApplyorderApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOfflineMarketApplyorderBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOfflineMarketApplyorderBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketApplyorderBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
