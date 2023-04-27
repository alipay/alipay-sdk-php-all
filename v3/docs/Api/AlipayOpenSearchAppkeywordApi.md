# Alipay\OpenAPISDK\AlipayOpenSearchAppkeywordApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenSearchAppkeywordApi.md#apply) | **POST** /v3/alipay/open/search/appkeyword/apply | 提报搜索关键词
[**batchquery()**](AlipayOpenSearchAppkeywordApi.md#batchquery) | **GET** /v3/alipay/open/search/appkeyword/batchquery | 查询小程序已配置关键词
[**delete()**](AlipayOpenSearchAppkeywordApi.md#delete) | **POST** /v3/alipay/open/search/appkeyword/delete | 删除搜索关键词
[**querystatus()**](AlipayOpenSearchAppkeywordApi.md#querystatus) | **GET** /v3/alipay/open/search/appkeyword/querystatus | 查询小程序搜索关键词的审核工单的状态


## `apply()`

```php
apply($alipayOpenSearchAppkeywordApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordApplyResponseModel
```

提报搜索关键词

提报搜索关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAppkeywordApi(
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

$alipayOpenSearchAppkeywordApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordApplyModel

try {
    $result = $apiInstance->apply($alipayOpenSearchAppkeywordApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAppkeywordApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchAppkeywordApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `batchquery()`

```php
batchquery($targetAppid, $status, $pageNumber, $pageSize): \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordBatchqueryResponseModel
```

查询小程序已配置关键词

查询小程序已配置关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAppkeywordApi(
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

$targetAppid = 2021001120654127; // string | 小程序id
$status = ONLINE; // string | 关键词的状态，枚举值，不传该字段表示查询所有状态
$pageNumber = 1; // int | 当前页
$pageSize = 10; // int | 每页显示条数

try {
    $result = $apiInstance->batchquery($targetAppid, $status, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAppkeywordApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppid** | **string**| 小程序id | [optional]
 **status** | **string**| 关键词的状态，枚举值，不传该字段表示查询所有状态 | [optional]
 **pageNumber** | **int**| 当前页 | [optional]
 **pageSize** | **int**| 每页显示条数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayOpenSearchAppkeywordDeleteModel): object
```

删除搜索关键词

删除搜索关键词

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAppkeywordApi(
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

$alipayOpenSearchAppkeywordDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordDeleteModel

try {
    $result = $apiInstance->delete($alipayOpenSearchAppkeywordDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAppkeywordApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchAppkeywordDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordDeleteModel**|  | [optional]

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
querystatus($targetAppid, $applyNo): \Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordQuerystatusResponseModel
```

查询小程序搜索关键词的审核工单的状态

查询小程序搜索关键词的审核工单的状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchAppkeywordApi(
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

$targetAppid = 2021001120654127; // string | 小程序id
$applyNo = 20220519000000108026; // string | 审核工单id，提报接口的返回值

try {
    $result = $apiInstance->querystatus($targetAppid, $applyNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchAppkeywordApi->querystatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppid** | **string**| 小程序id | [optional]
 **applyNo** | **string**| 审核工单id，提报接口的返回值 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchAppkeywordQuerystatusResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
