# Alipay\OpenAPISDK\AlipayOpenPublicMenuDataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenPublicMenuDataApi.md#batchquery) | **POST** /v3/alipay/open/public/menu/data/batchquery | 菜单分析数据查询接口


## `batchquery()`

```php
batchquery($alipayOpenPublicMenuDataBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicMenuDataBatchqueryResponseModel
```

菜单分析数据查询接口

开发者可以根据本接口查询30天内菜单的相关数据，包括菜单点击人数和次数

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMenuDataApi(
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

$alipayOpenPublicMenuDataBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMenuDataBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMenuDataBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenPublicMenuDataBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMenuDataApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMenuDataBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMenuDataBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicMenuDataBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
