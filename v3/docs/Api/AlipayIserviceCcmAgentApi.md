# Alipay\OpenAPISDK\AlipayIserviceCcmAgentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayIserviceCcmAgentApi.md#create) | **POST** /v3/alipay/iservice/ccm/agent/create | 新增客服接口
[**delete()**](AlipayIserviceCcmAgentApi.md#delete) | **DELETE** /v3/alipay/iservice/ccm/agent/delete | 删除客服接口
[**get()**](AlipayIserviceCcmAgentApi.md#get) | **GET** /v3/alipay/iservice/ccm/agent/get | 查询客服详情
[**modify()**](AlipayIserviceCcmAgentApi.md#modify) | **POST** /v3/alipay/iservice/ccm/agent/modify | 更新客服接口
[**query()**](AlipayIserviceCcmAgentApi.md#query) | **POST** /v3/alipay/iservice/ccm/agent/query | 客服查询接口


## `create()`

```php
create($alipayIserviceCcmAgentCreateModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentCreateResponseModel
```

新增客服接口

新增一个CCM客服

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentApi(
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

$alipayIserviceCcmAgentCreateModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentCreateModel

try {
    $result = $apiInstance->create($alipayIserviceCcmAgentCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmAgentCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($id): object
```

删除客服接口

管理员删除一个客服

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentApi(
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

$id = 2019032101896769; // string | 客服id

try {
    $result = $apiInstance->delete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 客服id | [optional]

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
get($id, $jobNumber, $userChannel, $externalUserId): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentGetResponseModel
```

查询客服详情

ISV或商户查询获取某个客服的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentApi(
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

$id = 2018101801902073; // string | 客服id
$jobNumber = 0001; // string | 客服工号
$userChannel = ALIPAY; // string | 客服账号渠道, ALIPAY:支付宝账号 user_channel和external_user_id必须配对使用
$externalUserId = 2088xxx; // string | 客服账号id，当user_channel=ALIPAY时，此id为支付宝2088id external_user_id和user_channel必须配对使用

try {
    $result = $apiInstance->get($id, $jobNumber, $userChannel, $externalUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| 客服id | [optional]
 **jobNumber** | **string**| 客服工号 | [optional]
 **userChannel** | **string**| 客服账号渠道, ALIPAY:支付宝账号 user_channel和external_user_id必须配对使用 | [optional]
 **externalUserId** | **string**| 客服账号id，当user_channel&#x3D;ALIPAY时，此id为支付宝2088id external_user_id和user_channel必须配对使用 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayIserviceCcmAgentModifyModel): object
```

更新客服接口

管理员修改客服信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentApi(
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

$alipayIserviceCcmAgentModifyModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentModifyModel

try {
    $result = $apiInstance->modify($alipayIserviceCcmAgentModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmAgentModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentModifyModel**|  | [optional]

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
query($alipayIserviceCcmAgentQueryModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentQueryResponseModel
```

客服查询接口

根据指定的查询条件查询客服列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentApi(
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

$alipayIserviceCcmAgentQueryModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentQueryModel

try {
    $result = $apiInstance->query($alipayIserviceCcmAgentQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmAgentQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
