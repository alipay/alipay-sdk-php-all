# Alipay\OpenAPISDK\AlipayUserCertifyOpenApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](AlipayUserCertifyOpenApi.md#initialize) | **POST** /v3/alipay/user/certify/open/initialize | 身份认证初始化服务
[**query()**](AlipayUserCertifyOpenApi.md#query) | **GET** /v3/alipay/user/certify/open/query | 身份认证记录查询


## `initialize()`

```php
initialize($alipayUserCertifyOpenInitializeModel): \Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenInitializeResponseModel
```

身份认证初始化服务

支付宝开放认证初始化服务，用于创建开放认证流程。注意：港澳台同胞身份验证服务仅支持在支付宝客户端内使用，外部 APP 使用该项服务需唤起支付宝客户端。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserCertifyOpenApi(
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

$alipayUserCertifyOpenInitializeModel = new \Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenInitializeModel(); // \Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenInitializeModel

try {
    $result = $apiInstance->initialize($alipayUserCertifyOpenInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserCertifyOpenApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserCertifyOpenInitializeModel** | **\Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($certifyId): \Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenQueryResponseModel
```

身份认证记录查询

商户在开放认证完成后，调用本接口查询认证状态和相关数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserCertifyOpenApi(
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

$certifyId = OC201809253000000393900404029253; // string | 本次申请操作的唯一标识，通过alipay.user.certify.open.initialize(身份认证初始化服务)接口同步响应获取。

try {
    $result = $apiInstance->query($certifyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserCertifyOpenApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certifyId** | **string**| 本次申请操作的唯一标识，通过alipay.user.certify.open.initialize(身份认证初始化服务)接口同步响应获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserCertifyOpenQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
