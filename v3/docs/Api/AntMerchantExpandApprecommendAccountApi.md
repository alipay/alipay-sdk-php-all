# Alipay\OpenAPISDK\AntMerchantExpandApprecommendAccountApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AntMerchantExpandApprecommendAccountApi.md#create) | **POST** /v3/ant/merchant/expand/apprecommend/account/create | 关联账号和小程序
[**delete()**](AntMerchantExpandApprecommendAccountApi.md#delete) | **DELETE** /v3/ant/merchant/expand/apprecommend/account/delete | 取消关联账号和小程序
[**query()**](AntMerchantExpandApprecommendAccountApi.md#query) | **GET** /v3/ant/merchant/expand/apprecommend/account/query | 查询已关联指定APP的账号列表


## `create()`

```php
create($antMerchantExpandApprecommendAccountCreateModel): object
```

关联账号和小程序

将账号与小程序进行绑定，用于支付推荐场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandApprecommendAccountApi(
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

$antMerchantExpandApprecommendAccountCreateModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAccountCreateModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAccountCreateModel

try {
    $result = $apiInstance->create($antMerchantExpandApprecommendAccountCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandApprecommendAccountApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandApprecommendAccountCreateModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAccountCreateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($appNo, $accNo): object
```

取消关联账号和小程序

取消账号与小程序的绑定，用于支付推荐场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandApprecommendAccountApi(
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

$appNo = 2021000155639069; // string | 待解绑小程序的app_id
$accNo = 2088001969784501; // string | 待解绑账号PID

try {
    $result = $apiInstance->delete($appNo, $accNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandApprecommendAccountApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appNo** | **string**| 待解绑小程序的app_id | [optional]
 **accNo** | **string**| 待解绑账号PID | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($appNo, $pageSize, $pageNumber): \Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAccountQueryResponseModel
```

查询已关联指定APP的账号列表

查询已关联指定APP的账号列表，用于支付推荐场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandApprecommendAccountApi(
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

$appNo = 2021000155639069; // string | 已关联小程序的app_id
$pageSize = 10; // int | 单页行数，不能超过100行
$pageNumber = 1; // int | 页码

try {
    $result = $apiInstance->query($appNo, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandApprecommendAccountApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appNo** | **string**| 已关联小程序的app_id | [optional]
 **pageSize** | **int**| 单页行数，不能超过100行 | [optional]
 **pageNumber** | **int**| 页码 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandApprecommendAccountQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
