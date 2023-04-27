# Alipay\OpenAPISDK\AlipayIserviceCcmSwTreeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayIserviceCcmSwTreeApi.md#batchquery) | **GET** /v3/alipay/iservice/ccm/sw/tree/batchquery | 知识库-类目-批量查询
[**create()**](AlipayIserviceCcmSwTreeApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/tree/create | 知识库-类目-创建
[**delete()**](AlipayIserviceCcmSwTreeApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/tree/delete | 知识库-类目-删除
[**get()**](AlipayIserviceCcmSwTreeApi.md#get) | **GET** /v3/alipay/iservice/ccm/sw/tree/get | 知识库-类目-获取
[**modify()**](AlipayIserviceCcmSwTreeApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/tree/modify | 知识库-类目-修改
[**publish()**](AlipayIserviceCcmSwTreeApi.md#publish) | **PUT** /v3/alipay/iservice/ccm/sw/tree/publish | 知识库-类目-发布


## `batchquery()`

```php
batchquery($ccsInstanceId): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeBatchqueryResponseModel
```

知识库-类目-批量查询

知识库-类目-批量查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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

$ccsInstanceId = ZPNASDK; // string | 子部门ID，不传为默认部门

try {
    $result = $apiInstance->batchquery($ccsInstanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ccsInstanceId** | **string**| 子部门ID，不传为默认部门 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayIserviceCcmSwTreeCreateModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeCreateResponseModel
```

知识库-类目-创建

知识库-类目-创建

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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

$alipayIserviceCcmSwTreeCreateModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeCreateModel

try {
    $result = $apiInstance->create($alipayIserviceCcmSwTreeCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwTreeCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete(): object
```

知识库-类目-删除

知识库-类目-删除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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


try {
    $result = $apiInstance->delete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `get()`

```php
get($ccsInstanceId, $id): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeGetResponseModel
```

知识库-类目-获取

知识库-类目-获取

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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

$ccsInstanceId = ZPNASDK; // string | 子部门ID，不传为默认部门
$id = 1; // int | 类目ID

try {
    $result = $apiInstance->get($ccsInstanceId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ccsInstanceId** | **string**| 子部门ID，不传为默认部门 | [optional]
 **id** | **int**| 类目ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayIserviceCcmSwTreeModifyModel): object
```

知识库-类目-修改

知识库-类目-修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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

$alipayIserviceCcmSwTreeModifyModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeModifyModel

try {
    $result = $apiInstance->modify($alipayIserviceCcmSwTreeModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwTreeModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreeModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `publish()`

```php
publish($alipayIserviceCcmSwTreePublishModel): object
```

知识库-类目-发布

知识库-类目-发布

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwTreeApi(
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

$alipayIserviceCcmSwTreePublishModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreePublishModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreePublishModel

try {
    $result = $apiInstance->publish($alipayIserviceCcmSwTreePublishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwTreeApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwTreePublishModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwTreePublishModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
