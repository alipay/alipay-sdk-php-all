# Alipay\OpenAPISDK\AlipayTradeRoyaltyRelationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayTradeRoyaltyRelationApi.md#batchquery) | **POST** /v3/alipay/trade/royalty/relation/batchquery | 分账关系查询
[**bind()**](AlipayTradeRoyaltyRelationApi.md#bind) | **POST** /v3/alipay/trade/royalty/relation/bind | 分账关系绑定
[**unbind()**](AlipayTradeRoyaltyRelationApi.md#unbind) | **POST** /v3/alipay/trade/royalty/relation/unbind | 分账关系解绑


## `batchquery()`

```php
batchquery($alipayTradeRoyaltyRelationBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBatchqueryResponseModel
```

分账关系查询

当商户签约分账产品后，授权ISV帮其进行分账关系的维护。本接口用于商户与分账方的关系查询。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeRoyaltyRelationApi(
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

$alipayTradeRoyaltyRelationBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayTradeRoyaltyRelationBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeRoyaltyRelationApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeRoyaltyRelationBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `bind()`

```php
bind($alipayTradeRoyaltyRelationBindModel): \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBindResponseModel
```

分账关系绑定

当商户签约分账产品后，授权ISV帮其进行分账关系的维护。本接口用于商户与分账方的关系绑定。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeRoyaltyRelationApi(
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

$alipayTradeRoyaltyRelationBindModel = new \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBindModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBindModel

try {
    $result = $apiInstance->bind($alipayTradeRoyaltyRelationBindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeRoyaltyRelationApi->bind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeRoyaltyRelationBindModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBindModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationBindResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unbind()`

```php
unbind($alipayTradeRoyaltyRelationUnbindModel): \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationUnbindResponseModel
```

分账关系解绑

当商户签约分账产品后，授权ISV帮其进行分账关系的维护。本接口用于商户与分账方的关系解绑。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeRoyaltyRelationApi(
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

$alipayTradeRoyaltyRelationUnbindModel = new \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationUnbindModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationUnbindModel

try {
    $result = $apiInstance->unbind($alipayTradeRoyaltyRelationUnbindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeRoyaltyRelationApi->unbind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeRoyaltyRelationUnbindModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationUnbindModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeRoyaltyRelationUnbindResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
