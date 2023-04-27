# Alipay\OpenAPISDK\AlipayOpenPublicArticlesummaryDataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenPublicArticlesummaryDataApi.md#batchquery) | **POST** /v3/alipay/open/public/articlesummary/data/batchquery | 图文分析-按时间查询数据接口


## `batchquery()`

```php
batchquery($alipayOpenPublicArticlesummaryDataBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicArticlesummaryDataBatchqueryResponseModel
```

图文分析-按时间查询数据接口

开发者可以通过图文分析接口查询30天内，所有历史发布的图文消息的数据，包括送达人数、曝光人数、图文阅读人数、分享人数等信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicArticlesummaryDataApi(
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

$alipayOpenPublicArticlesummaryDataBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicArticlesummaryDataBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicArticlesummaryDataBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenPublicArticlesummaryDataBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicArticlesummaryDataApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicArticlesummaryDataBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicArticlesummaryDataBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicArticlesummaryDataBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
