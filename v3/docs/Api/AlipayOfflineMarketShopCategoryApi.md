# Alipay\OpenAPISDK\AlipayOfflineMarketShopCategoryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOfflineMarketShopCategoryApi.md#query) | **GET** /v3/alipay/offline/market/shop/category/query | 门店类目配置查询接口


## `query()`

```php
query($categoryId, $opRole): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCategoryQueryResponseModel
```

门店类目配置查询接口

用于查询可用于开店的类目，以及类目上的配置约束信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopCategoryApi(
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

$categoryId = 2015050700000000; // string | 类目ID，如果为空则查询全部类目。
$opRole = ISV; // string | 表示接口业务的调用方身份,默认不填标识为ISV。

try {
    $result = $apiInstance->query($categoryId, $opRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopCategoryApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**| 类目ID，如果为空则查询全部类目。 | [optional]
 **opRole** | **string**| 表示接口业务的调用方身份,默认不填标识为ISV。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCategoryQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
