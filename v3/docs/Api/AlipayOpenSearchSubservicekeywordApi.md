# Alipay\OpenAPISDK\AlipayOpenSearchSubservicekeywordApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenSearchSubservicekeywordApi.md#apply) | **POST** /v3/alipay/open/search/subservicekeyword/apply | 提报服务关键词
[**batchquery()**](AlipayOpenSearchSubservicekeywordApi.md#batchquery) | **GET** /v3/alipay/open/search/subservicekeyword/batchquery | 服务关键词批量查询接口
[**delete()**](AlipayOpenSearchSubservicekeywordApi.md#delete) | **POST** /v3/alipay/open/search/subservicekeyword/delete | 删除服务关键词
[**querystatus()**](AlipayOpenSearchSubservicekeywordApi.md#querystatus) | **GET** /v3/alipay/open/search/subservicekeyword/querystatus | 查询小程序服务关键词的审核工单的状态


## `apply()`

```php
apply($alipayOpenSearchSubservicekeywordApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordApplyResponseModel
```

提报服务关键词

小程序-服务推广-提报服务关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchSubservicekeywordApi(
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

$alipayOpenSearchSubservicekeywordApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordApplyModel

try {
    $result = $apiInstance->apply($alipayOpenSearchSubservicekeywordApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchSubservicekeywordApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchSubservicekeywordApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `batchquery()`

```php
batchquery($targetAppid, $status, $pageNumber, $pageSize): \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordBatchqueryResponseModel
```

服务关键词批量查询接口

批量查询小程序的服务关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchSubservicekeywordApi(
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

$targetAppid = 2021001112626071; // string | 小程序id
$status = ONLINE; // string | 审核状态，服务关键词的审核状态，枚举值，不传该字段表示查询所有状态
$pageNumber = 1; // int | 分页参数，分页查询时使用
$pageSize = 10; // int | 分页参数，分页查询时使用

try {
    $result = $apiInstance->batchquery($targetAppid, $status, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchSubservicekeywordApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppid** | **string**| 小程序id | [optional]
 **status** | **string**| 审核状态，服务关键词的审核状态，枚举值，不传该字段表示查询所有状态 | [optional]
 **pageNumber** | **int**| 分页参数，分页查询时使用 | [optional]
 **pageSize** | **int**| 分页参数，分页查询时使用 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayOpenSearchSubservicekeywordDeleteModel): object
```

删除服务关键词

删除服务关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchSubservicekeywordApi(
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

$alipayOpenSearchSubservicekeywordDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordDeleteModel

try {
    $result = $apiInstance->delete($alipayOpenSearchSubservicekeywordDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchSubservicekeywordApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchSubservicekeywordDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordDeleteModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `querystatus()`

```php
querystatus($targetAppid, $applyNo): \Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordQuerystatusResponseModel
```

查询小程序服务关键词的审核工单的状态

查询小程序服务关键词的审核工单的状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchSubservicekeywordApi(
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

$targetAppid = 2021001112626071; // string | 小程序id
$applyNo = 20220519000000108026; // string | 审核工单id，提报接口的返回值

try {
    $result = $apiInstance->querystatus($targetAppid, $applyNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchSubservicekeywordApi->querystatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppid** | **string**| 小程序id | [optional]
 **applyNo** | **string**| 审核工单id，提报接口的返回值 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchSubservicekeywordQuerystatusResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
