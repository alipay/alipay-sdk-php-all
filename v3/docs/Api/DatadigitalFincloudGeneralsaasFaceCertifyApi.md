# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasFaceCertifyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](DatadigitalFincloudGeneralsaasFaceCertifyApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/certify/initialize | H5人脸核身初始化
[**query()**](DatadigitalFincloudGeneralsaasFaceCertifyApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/certify/query | H5人脸核身查询记录
[**verify()**](DatadigitalFincloudGeneralsaasFaceCertifyApi.md#verify) | **POST** /v3/datadigital/fincloud/generalsaas/face/certify/verify | H5人脸核身开始认证


## `initialize()`

```php
initialize($datadigitalFincloudGeneralsaasFaceCertifyInitializeModel): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyInitializeResponseModel
```

H5人脸核身初始化

人脸核身初始化服务，用于创建认证流程。供外部客户使用该项服务。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceCertifyApi(
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

$datadigitalFincloudGeneralsaasFaceCertifyInitializeModel = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel

try {
    $result = $apiInstance->initialize($datadigitalFincloudGeneralsaasFaceCertifyInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceCertifyApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datadigitalFincloudGeneralsaasFaceCertifyInitializeModel** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($certifyId): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyQueryResponseModel
```

H5人脸核身查询记录

商户在用户使用支付宝完成刷脸之后，调用本接口查询核身结果状态及相关数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceCertifyApi(
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

$certifyId = 03cdsfsss20048373; // string | 本次申请操作的唯一标识，通过datadigital.fincloud.generalsaas.face.certify.initialize 接口同步响应获取。

try {
    $result = $apiInstance->query($certifyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceCertifyApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certifyId** | **string**| 本次申请操作的唯一标识，通过datadigital.fincloud.generalsaas.face.certify.initialize 接口同步响应获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `verify()`

```php
verify($datadigitalFincloudGeneralsaasFaceCertifyVerifyModel): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyVerifyResponseModel
```

H5人脸核身开始认证

H5人脸核身服务开始认证。请根据返回结果渲染页面。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceCertifyApi(
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

$datadigitalFincloudGeneralsaasFaceCertifyVerifyModel = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyVerifyModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyVerifyModel

try {
    $result = $apiInstance->verify($datadigitalFincloudGeneralsaasFaceCertifyVerifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceCertifyApi->verify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datadigitalFincloudGeneralsaasFaceCertifyVerifyModel** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyVerifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCertifyVerifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
