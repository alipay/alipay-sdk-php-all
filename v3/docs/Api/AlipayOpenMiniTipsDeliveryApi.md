# Alipay\OpenAPISDK\AlipayOpenMiniTipsDeliveryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenMiniTipsDeliveryApi.md#batchquery) | **POST** /v3/alipay/open/mini/tips/delivery/batchquery | 小程序收藏引导投放活动配置批量查询
[**create()**](AlipayOpenMiniTipsDeliveryApi.md#create) | **POST** /v3/alipay/open/mini/tips/delivery/create | 小程序收藏引导投放活动配置创建
[**modify()**](AlipayOpenMiniTipsDeliveryApi.md#modify) | **POST** /v3/alipay/open/mini/tips/delivery/modify | 小程序收藏引导投放活动修改
[**query()**](AlipayOpenMiniTipsDeliveryApi.md#query) | **GET** /v3/alipay/open/mini/tips/delivery/query | 小程序收藏引导投放活动详情查询


## `batchquery()`

```php
batchquery($alipayOpenMiniTipsDeliveryBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryBatchqueryResponseModel
```

小程序收藏引导投放活动配置批量查询

小程序收藏引导投放活动配置批量查询接口，获取该小程序下所有活动配置及状态信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTipsDeliveryApi(
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

$alipayOpenMiniTipsDeliveryBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenMiniTipsDeliveryBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTipsDeliveryApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTipsDeliveryBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayOpenMiniTipsDeliveryCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryCreateResponseModel
```

小程序收藏引导投放活动配置创建

小程序收藏引导投放活动配置创建。通过配置有效的小程序收藏引导（tips）文案，创建小程序收藏引导活动。用户在活动有效期内等于相应页面，将展示配置的个性化文案，帮助用户收藏小程序。请结合您的小程序及页面，配置个性化文案。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTipsDeliveryApi(
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

$alipayOpenMiniTipsDeliveryCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryCreateModel

try {
    $result = $apiInstance->create($alipayOpenMiniTipsDeliveryCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTipsDeliveryApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTipsDeliveryCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOpenMiniTipsDeliveryModifyModel): object
```

小程序收藏引导投放活动修改

小程序收藏引导投放活动修改接口，目前支持活动状态的修改，包括暂停、恢复、终止单个收藏引导活动。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTipsDeliveryApi(
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

$alipayOpenMiniTipsDeliveryModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryModifyModel

try {
    $result = $apiInstance->modify($alipayOpenMiniTipsDeliveryModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTipsDeliveryApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTipsDeliveryModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($deliveryId): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryQueryResponseModel
```

小程序收藏引导投放活动详情查询

小程序收藏引导投放活动配置详情查询接口，获取当前活动ID对应活动的配置及状态信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTipsDeliveryApi(
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

$deliveryId = 20211114000003057595; // string | 收藏引导投放活动ID，查询收藏引导活动必填参数

try {
    $result = $apiInstance->query($deliveryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTipsDeliveryApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deliveryId** | **string**| 收藏引导投放活动ID，查询收藏引导活动必填参数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsDeliveryQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
