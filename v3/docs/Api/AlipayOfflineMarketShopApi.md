# Alipay\OpenAPISDK\AlipayOfflineMarketShopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOfflineMarketShopApi.md#batchquery) | **POST** /v3/alipay/offline/market/shop/batchquery | 查询商户的门店编号列表
[**create()**](AlipayOfflineMarketShopApi.md#create) | **POST** /v3/alipay/offline/market/shop/create | 创建门店信息
[**modify()**](AlipayOfflineMarketShopApi.md#modify) | **POST** /v3/alipay/offline/market/shop/modify | 修改门店信息
[**querydetail()**](AlipayOfflineMarketShopApi.md#querydetail) | **GET** /v3/alipay/offline/market/shop/querydetail | 查询单个门店信息接口


## `batchquery()`

```php
batchquery($alipayOfflineMarketShopBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopBatchqueryResponseModel
```

查询商户的门店编号列表

系统商通过该接口可以查询对应APPID下所有的门店编号（支付宝口碑门店编号）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopApi(
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

$alipayOfflineMarketShopBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOfflineMarketShopBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOfflineMarketShopBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayOfflineMarketShopCreateModel): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCreateResponseModel
```

创建门店信息

系统商需要通过该接口在口碑平台帮助商户创建门店信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopApi(
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

$alipayOfflineMarketShopCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCreateModel

try {
    $result = $apiInstance->create($alipayOfflineMarketShopCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOfflineMarketShopCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOfflineMarketShopModifyModel): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopModifyResponseModel
```

修改门店信息

系统商需要通过该接口在口碑平台帮助商户修改门店信息，所有的选项都为非必填项，需要修改什么信息就传入什么参数，不传入的参数，则保持不变。修改门店名、品牌名、品牌logo、首图、门店图片、营业执照、营业执照编号、营业执照名称、经营许可证、经营许可证有效期、门店授权函、是否在其它平台开店、在其它平台开店照片，会重新触发风控审核，修改其他字段不会触发风控审核。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopApi(
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

$alipayOfflineMarketShopModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopModifyModel

try {
    $result = $apiInstance->modify($alipayOfflineMarketShopModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOfflineMarketShopModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `querydetail()`

```php
querydetail($shopId, $opRole): \Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopQuerydetailResponseModel
```

查询单个门店信息接口

系统商通过该接口可以查询单个门店的详细信息，包括门店基础信息，门店状态等信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOfflineMarketShopApi(
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

$shopId = 2015052100077000000000120773; // string | 支付宝门店ID
$opRole = MERCHANT或PROVIDER; // string | 服务商及商户调用情况下务必传递。操作人角色，默认商户操作:MERCHANT；服务商操作：PROVIDER；ISV: 不需要填写

try {
    $result = $apiInstance->querydetail($shopId, $opRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOfflineMarketShopApi->querydetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopId** | **string**| 支付宝门店ID | [optional]
 **opRole** | **string**| 服务商及商户调用情况下务必传递。操作人角色，默认商户操作:MERCHANT；服务商操作：PROVIDER；ISV: 不需要填写 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOfflineMarketShopQuerydetailResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
