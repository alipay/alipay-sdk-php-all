# Alipay\OpenAPISDK\AlipayOpenAgentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayOpenAgentApi.md#cancel) | **POST** /v3/alipay/open/agent/cancel | 取消代商户签约、创建应用事务
[**confirm()**](AlipayOpenAgentApi.md#confirm) | **POST** /v3/alipay/open/agent/confirm | 提交代商户签约、创建应用事务
[**create()**](AlipayOpenAgentApi.md#create) | **POST** /v3/alipay/open/agent/create | 开启代商户签约、创建应用事务


## `cancel()`

```php
cancel($alipayOpenAgentCancelModel): object
```

取消代商户签约、创建应用事务

取消代商户签约、创建应用事务

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentApi(
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

$alipayOpenAgentCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenAgentCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAgentCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `confirm()`

```php
confirm($alipayOpenAgentConfirmModel): \Alipay\OpenAPISDK\Model\AlipayOpenAgentConfirmResponseModel
```

提交代商户签约、创建应用事务

提交事务。只允许提交init状态的事务，submit|cancel|timeout 状态的都是终态，不允许提交，且不允许提交空事务，需要先调用代创建小程序、代签约当面付等业务接口，再提交事务。服务市场订购及授权，使用订单授权凭证order_ticket开启的事务，提交后会有应用授权令牌返回。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentApi(
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

$alipayOpenAgentConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentConfirmModel

try {
    $result = $apiInstance->confirm($alipayOpenAgentConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAgentConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentConfirmModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAgentConfirmResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayOpenAgentCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenAgentCreateResponseModel
```

开启代商户签约、创建应用事务

在 ISV 代商户进行应用创建、产品签约时，用于开启一个操作事务，必须是第一个调用的接口。场景1：ISV 代商户进行应用创建、产品签约，最后提交事务后需要商户确认才能完成流程；场景2：服务市场订购及授权，使用订单授权凭证order_ticket开启预授权模式，该模式下提交事务后无需商户确认。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentApi(
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

$alipayOpenAgentCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentCreateModel

try {
    $result = $apiInstance->create($alipayOpenAgentCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAgentCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAgentCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
