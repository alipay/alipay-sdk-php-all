# Alipay\OpenAPISDK\AlipayIserviceCcmSwLibraryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayIserviceCcmSwLibraryApi.md#batchquery) | **GET** /v3/alipay/iservice/ccm/sw/library/batchquery | 知识库-库-批量查询
[**create()**](AlipayIserviceCcmSwLibraryApi.md#create) | **PUT** /v3/alipay/iservice/ccm/sw/library/create | 知识库-库-创建
[**delete()**](AlipayIserviceCcmSwLibraryApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/sw/library/delete | 知识库-库-删除
[**modify()**](AlipayIserviceCcmSwLibraryApi.md#modify) | **PATCH** /v3/alipay/iservice/ccm/sw/library/modify | 知识库-库-修改


## `batchquery()`

```php
batchquery($ccsInstanceId): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryBatchqueryResponseModel
```

知识库-库-批量查询

知识库-库-批量查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwLibraryApi(
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
    echo 'Exception when calling AlipayIserviceCcmSwLibraryApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ccsInstanceId** | **string**| 子部门ID，不传为默认部门 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayIserviceCcmSwLibraryCreateModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryCreateResponseModel
```

知识库-库-创建

知识库-库-创建

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwLibraryApi(
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

$alipayIserviceCcmSwLibraryCreateModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryCreateModel

try {
    $result = $apiInstance->create($alipayIserviceCcmSwLibraryCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwLibraryApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwLibraryCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryCreateResponseModel**

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

知识库-库-删除

知识库-库-删除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwLibraryApi(
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
    echo 'Exception when calling AlipayIserviceCcmSwLibraryApi->delete: ', $e->getMessage(), PHP_EOL;
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

## `modify()`

```php
modify($alipayIserviceCcmSwLibraryModifyModel): object
```

知识库-库-修改

知识库-库-修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwLibraryApi(
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

$alipayIserviceCcmSwLibraryModifyModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryModifyModel

try {
    $result = $apiInstance->modify($alipayIserviceCcmSwLibraryModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwLibraryApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwLibraryModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwLibraryModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
