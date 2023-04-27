# Alipay\OpenAPISDK\AlipayBossFncUserinvoiceinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayBossFncUserinvoiceinfoApi.md#create) | **POST** /v3/alipay/boss/fnc/userinvoiceinfo/create | 新增客户开票资料
[**modify()**](AlipayBossFncUserinvoiceinfoApi.md#modify) | **POST** /v3/alipay/boss/fnc/userinvoiceinfo/modify | 修改用户开票资料
[**query()**](AlipayBossFncUserinvoiceinfoApi.md#query) | **GET** /v3/alipay/boss/fnc/userinvoiceinfo/query | 根据PID获取相关的开票资料


## `create()`

```php
create($alipayBossFncUserinvoiceinfoCreateModel): \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoCreateResponseModel
```

新增客户开票资料

申请开票alipay.boss.fnc.invoice.create之前需要维护的开票资料信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncUserinvoiceinfoApi(
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

$alipayBossFncUserinvoiceinfoCreateModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoCreateModel

try {
    $result = $apiInstance->create($alipayBossFncUserinvoiceinfoCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncUserinvoiceinfoApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncUserinvoiceinfoCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayBossFncUserinvoiceinfoModifyModel): object
```

修改用户开票资料

通过查询用户的开票资料（alipay.boss.fnc.userinvoiceinfo.query）后进行开票资料的修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncUserinvoiceinfoApi(
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

$alipayBossFncUserinvoiceinfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoModifyModel

try {
    $result = $apiInstance->modify($alipayBossFncUserinvoiceinfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncUserinvoiceinfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayBossFncUserinvoiceinfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoModifyModel**|  | [optional]

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
query($pid): \Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoQueryResponseModel
```

根据PID获取相关的开票资料

根据PID获取相关的开票资料

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayBossFncUserinvoiceinfoApi(
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

$pid = 2088001007243670; // string | 开票pid/mid/ou，唯一标识商户信息/集团用户信息的ID

try {
    $result = $apiInstance->query($pid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayBossFncUserinvoiceinfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pid** | **string**| 开票pid/mid/ou，唯一标识商户信息/集团用户信息的ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayBossFncUserinvoiceinfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
