# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasFaceVerificationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](DatadigitalFincloudGeneralsaasFaceVerificationApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/verification/initialize | 人脸核身初始化
[**query()**](DatadigitalFincloudGeneralsaasFaceVerificationApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/verification/query | 人脸核身结果查询


## `initialize()`

```php
initialize($datadigitalFincloudGeneralsaasFaceVerificationInitializeModel): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationInitializeResponseModel
```

人脸核身初始化

人脸核身初始化接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceVerificationApi(
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

$datadigitalFincloudGeneralsaasFaceVerificationInitializeModel = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel

try {
    $result = $apiInstance->initialize($datadigitalFincloudGeneralsaasFaceVerificationInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceVerificationApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datadigitalFincloudGeneralsaasFaceVerificationInitializeModel** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($certifyId, $needAlivePhoto): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationQueryResponseModel
```

人脸核身结果查询

查询核身结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceVerificationApi(
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

$certifyId = adsfasdfasdf; // string | 填入人脸核身初始化阶段获取到的certify_id
$needAlivePhoto = N; // string | 是否需要返回活体结果图片，needAlivePhoto：Y_O （原始图片）、Y_M（虚化，背景马赛克）、N（不返图），默认为N

try {
    $result = $apiInstance->query($certifyId, $needAlivePhoto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceVerificationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certifyId** | **string**| 填入人脸核身初始化阶段获取到的certify_id | [optional]
 **needAlivePhoto** | **string**| 是否需要返回活体结果图片，needAlivePhoto：Y_O （原始图片）、Y_M（虚化，背景马赛克）、N（不返图），默认为N | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceVerificationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
