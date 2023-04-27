# Alipay\OpenAPISDK\AlipayOpenServicemarketCommodityShopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**offline()**](AlipayOpenServicemarketCommodityShopApi.md#offline) | **POST** /v3/alipay/open/servicemarket/commodity/shop/offline | 门店插件下架操作
[**online()**](AlipayOpenServicemarketCommodityShopApi.md#online) | **POST** /v3/alipay/open/servicemarket/commodity/shop/online | 门店插件上架操作


## `offline()`

```php
offline($alipayOpenServicemarketCommodityShopOfflineModel): object
```

门店插件下架操作

本接口需要商户授权服务商门店操作权限后，服务商可对商户门店上的插件进行下架操作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketCommodityShopApi(
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

$alipayOpenServicemarketCommodityShopOfflineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOfflineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOfflineModel

try {
    $result = $apiInstance->offline($alipayOpenServicemarketCommodityShopOfflineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketCommodityShopApi->offline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketCommodityShopOfflineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOfflineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `online()`

```php
online($alipayOpenServicemarketCommodityShopOnlineModel): object
```

门店插件上架操作

本接口用于上架商户门店订购的服务。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketCommodityShopApi(
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

$alipayOpenServicemarketCommodityShopOnlineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOnlineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOnlineModel

try {
    $result = $apiInstance->online($alipayOpenServicemarketCommodityShopOnlineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketCommodityShopApi->online: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketCommodityShopOnlineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketCommodityShopOnlineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
