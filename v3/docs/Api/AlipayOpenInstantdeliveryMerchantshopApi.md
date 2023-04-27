# Alipay\OpenAPISDK\AlipayOpenInstantdeliveryMerchantshopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenInstantdeliveryMerchantshopApi.md#batchquery) | **POST** /v3/alipay/open/instantdelivery/merchantshop/batchquery | 即时配送商家门店分页查询
[**create()**](AlipayOpenInstantdeliveryMerchantshopApi.md#create) | **POST** /v3/alipay/open/instantdelivery/merchantshop/create | 即时配送商家门店创建
[**modify()**](AlipayOpenInstantdeliveryMerchantshopApi.md#modify) | **POST** /v3/alipay/open/instantdelivery/merchantshop/modify | 即时配送商家门店更新
[**query()**](AlipayOpenInstantdeliveryMerchantshopApi.md#query) | **GET** /v3/alipay/open/instantdelivery/merchantshop/query | 即时配送商家门店详情查询


## `batchquery()`

```php
batchquery($alipayOpenInstantdeliveryMerchantshopBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopBatchqueryResponseModel
```

即时配送商家门店分页查询

即时配送场景，商家门店信息分页查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantshopApi(
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

$alipayOpenInstantdeliveryMerchantshopBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenInstantdeliveryMerchantshopBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantshopApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenInstantdeliveryMerchantshopBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayOpenInstantdeliveryMerchantshopCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopCreateResponseModel
```

即时配送商家门店创建

帮商家在即时配送公司创建门店。名称+地址必须全局唯一；pid下的shopNo必须唯一。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantshopApi(
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

$alipayOpenInstantdeliveryMerchantshopCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopCreateModel

try {
    $result = $apiInstance->create($alipayOpenInstantdeliveryMerchantshopCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantshopApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenInstantdeliveryMerchantshopCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOpenInstantdeliveryMerchantshopModifyModel): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopModifyResponseModel
```

即时配送商家门店更新

帮商家更新在即时配送公司的门店

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantshopApi(
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

$alipayOpenInstantdeliveryMerchantshopModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopModifyModel

try {
    $result = $apiInstance->modify($alipayOpenInstantdeliveryMerchantshopModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantshopApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenInstantdeliveryMerchantshopModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($shopNo): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopQueryResponseModel
```

即时配送商家门店详情查询

即时配送场景，查询商家门店详情信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantshopApi(
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

$shopNo = 1000; // string | 商家门店编码。

try {
    $result = $apiInstance->query($shopNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantshopApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopNo** | **string**| 商家门店编码。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantshopQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
