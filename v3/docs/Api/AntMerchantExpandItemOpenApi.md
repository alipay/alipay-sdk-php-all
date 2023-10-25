# Alipay\OpenAPISDK\AntMerchantExpandItemOpenApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AntMerchantExpandItemOpenApi.md#batchquery) | **POST** /v3/ant/merchant/expand/item/open/batchquery | 批量查询商品接口
[**create()**](AntMerchantExpandItemOpenApi.md#create) | **POST** /v3/ant/merchant/expand/item/open/create | 创建商品接口
[**delete()**](AntMerchantExpandItemOpenApi.md#delete) | **DELETE** /v3/ant/merchant/expand/item/open/delete | 删除商品接口
[**modify()**](AntMerchantExpandItemOpenApi.md#modify) | **POST** /v3/ant/merchant/expand/item/open/modify | 修改商品接口
[**query()**](AntMerchantExpandItemOpenApi.md#query) | **GET** /v3/ant/merchant/expand/item/open/query | 查询商品接口


## `batchquery()`

```php
batchquery($antMerchantExpandItemOpenBatchqueryModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenBatchqueryResponseModel
```

批量查询商品接口

用于ISV或商户批量查询商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemOpenApi(
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

$antMerchantExpandItemOpenBatchqueryModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenBatchqueryModel

try {
    $result = $apiInstance->batchquery($antMerchantExpandItemOpenBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemOpenApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemOpenBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($antMerchantExpandItemOpenCreateModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenCreateResponseModel
```

创建商品接口

用于ISV或商户创建商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemOpenApi(
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

$antMerchantExpandItemOpenCreateModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenCreateModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenCreateModel

try {
    $result = $apiInstance->create($antMerchantExpandItemOpenCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemOpenApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemOpenCreateModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($itemId): object
```

删除商品接口

用于ISV或商户删除商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemOpenApi(
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

$itemId = 2019073100702219000000100000; // string | 商品ID

try {
    $result = $apiInstance->delete($itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemOpenApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **string**| 商品ID | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($antMerchantExpandItemOpenModifyModel): object
```

修改商品接口

用于ISV或商户修改商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemOpenApi(
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

$antMerchantExpandItemOpenModifyModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenModifyModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenModifyModel

try {
    $result = $apiInstance->modify($antMerchantExpandItemOpenModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemOpenApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemOpenModifyModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenModifyModel**|  | [optional]

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
query($targetId, $scene, $targetType, $status): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenQueryResponseModel
```

查询商品接口

用于ISV或商户查询商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemOpenApi(
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

$targetId = 2018090600502000000022501261; // string | 商品归属主体ID 例：商品归属主体类型target_type为店铺，则商品归属主体ID为店铺ID（支付宝侧店铺ID）；归属主体类型target_type为小程序，则归属主体ID为小程序ID
$scene = APP_ORDER; // string | 场景码（具体值请参见产品文档）。
$targetType = 8; // string | 商品归属主体类型。枚举如下： 5：店铺。 8：小程序。
$status = EFFECT; // string | 商品状态

try {
    $result = $apiInstance->query($targetId, $scene, $targetType, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemOpenApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetId** | **string**| 商品归属主体ID 例：商品归属主体类型target_type为店铺，则商品归属主体ID为店铺ID（支付宝侧店铺ID）；归属主体类型target_type为小程序，则归属主体ID为小程序ID | [optional]
 **scene** | **string**| 场景码（具体值请参见产品文档）。 | [optional]
 **targetType** | **string**| 商品归属主体类型。枚举如下： 5：店铺。 8：小程序。 | [optional]
 **status** | **string**| 商品状态 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemOpenQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
