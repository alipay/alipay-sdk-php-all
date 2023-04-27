# Alipay\OpenAPISDK\AlipayIserviceCcmInstanceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayIserviceCcmInstanceApi.md#create) | **POST** /v3/alipay/iservice/ccm/instance/create | 创建租户实例
[**get()**](AlipayIserviceCcmInstanceApi.md#get) | **GET** /v3/alipay/iservice/ccm/instance/get | 查询单个租户实例（数据权限）
[**query()**](AlipayIserviceCcmInstanceApi.md#query) | **GET** /v3/alipay/iservice/ccm/instance/query | 列出所有的租户实例（数据权限）


## `create()`

```php
create($alipayIserviceCcmInstanceCreateModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceCreateResponseModel
```

创建租户实例

创建租户实例

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmInstanceApi(
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

$alipayIserviceCcmInstanceCreateModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceCreateModel

try {
    $result = $apiInstance->create($alipayIserviceCcmInstanceCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmInstanceApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmInstanceCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `get()`

```php
get($id, $externalId): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceGetResponseModel
```

查询单个租户实例（数据权限）

查询单个租户实例（数据权限）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmInstanceApi(
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

$id = pYv_gs0m; // string | 部门id（即租户实例ID、数据权限ID）
$externalId = 5544744; // string | 外部id

try {
    $result = $apiInstance->get($id, $externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmInstanceApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 部门id（即租户实例ID、数据权限ID） | [optional]
 **externalId** | **string**| 外部id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceQueryResponseModel
```

列出所有的租户实例（数据权限）

列出所有的租户实例（数据权限）。一个云客服租户下可以有多个租户实例（数据权限），每个租户实例之间的数据是隔离的（除了用户、权限、私信、IVR数据外）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmInstanceApi(
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

$pageNum = 1; // int | 查询结果的页码，起始值为 1，默认值为 1
$pageSize = 10; // int | 分页查询时设置的每页记录数，最大值 100 行，默认为 10

try {
    $result = $apiInstance->query($pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmInstanceApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNum** | **int**| 查询结果的页码，起始值为 1，默认值为 1 | [optional]
 **pageSize** | **int**| 分页查询时设置的每页记录数，最大值 100 行，默认为 10 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmInstanceQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
