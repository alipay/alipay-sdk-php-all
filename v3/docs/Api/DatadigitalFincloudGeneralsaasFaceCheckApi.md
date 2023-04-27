# Alipay\OpenAPISDK\DatadigitalFincloudGeneralsaasFaceCheckApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](DatadigitalFincloudGeneralsaasFaceCheckApi.md#initialize) | **POST** /v3/datadigital/fincloud/generalsaas/face/check/initialize | 人脸检测初始化
[**query()**](DatadigitalFincloudGeneralsaasFaceCheckApi.md#query) | **GET** /v3/datadigital/fincloud/generalsaas/face/check/query | 人脸检测结果数据查询


## `initialize()`

```php
initialize($datadigitalFincloudGeneralsaasFaceCheckInitializeModel): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckInitializeResponseModel
```

人脸检测初始化

人脸检测业务单据初始化

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceCheckApi(
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

$datadigitalFincloudGeneralsaasFaceCheckInitializeModel = new \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckInitializeModel(); // \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckInitializeModel

try {
    $result = $apiInstance->initialize($datadigitalFincloudGeneralsaasFaceCheckInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceCheckApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datadigitalFincloudGeneralsaasFaceCheckInitializeModel** | **\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($certifyId, $needAlivePhoto, $needScore, $needQualityScore, $needAttackResult): \Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckQueryResponseModel
```

人脸检测结果数据查询

用于查询人脸检测结果的数据。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\DatadigitalFincloudGeneralsaasFaceCheckApi(
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

$certifyId = dddddfsss88833ssf; // string | 传入初始化接口datadigital.fincloud.generalsaas.face.check.initialize 得到的certify_id
$needAlivePhoto = Y_M; // string | 是否需要返回活体结果图片，needAlivePhoto：Y_O （原始图片）、Y_M（虚化，背景马赛克）、N（不返图）。非必填，默认为N
$needScore = Y; // string | 该入参已经废弃。
$needQualityScore = N; // string | 是否需要返回图片质量分，非必填，默认值为N。 N表示不需要，Y表示需要
$needAttackResult = N; // string | 该参数已废弃

try {
    $result = $apiInstance->query($certifyId, $needAlivePhoto, $needScore, $needQualityScore, $needAttackResult);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatadigitalFincloudGeneralsaasFaceCheckApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certifyId** | **string**| 传入初始化接口datadigital.fincloud.generalsaas.face.check.initialize 得到的certify_id | [optional]
 **needAlivePhoto** | **string**| 是否需要返回活体结果图片，needAlivePhoto：Y_O （原始图片）、Y_M（虚化，背景马赛克）、N（不返图）。非必填，默认为N | [optional]
 **needScore** | **string**| 该入参已经废弃。 | [optional]
 **needQualityScore** | **string**| 是否需要返回图片质量分，非必填，默认值为N。 N表示不需要，Y表示需要 | [optional]
 **needAttackResult** | **string**| 该参数已废弃 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\DatadigitalFincloudGeneralsaasFaceCheckQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
