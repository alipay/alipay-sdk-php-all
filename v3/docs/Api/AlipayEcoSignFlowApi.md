# Alipay\OpenAPISDK\AlipayEcoSignFlowApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayEcoSignFlowApi.md#cancel) | **POST** /v3/alipay/eco/sign/flow/cancel | 签署流程撤销（E签宝）
[**create()**](AlipayEcoSignFlowApi.md#create) | **POST** /v3/alipay/eco/sign/flow/create | 创建流程（E签宝）
[**finish()**](AlipayEcoSignFlowApi.md#finish) | **POST** /v3/alipay/eco/sign/flow/finish | 签署流程归档
[**query()**](AlipayEcoSignFlowApi.md#query) | **GET** /v3/alipay/eco/sign/flow/query | 签署流程查询（E签宝）


## `cancel()`

```php
cancel($targetAppId, $alipayEcoSignFlowCancelModel): object
```

签署流程撤销（E签宝）

签署流程撤销（E签宝）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoSignFlowApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$alipayEcoSignFlowCancelModel = new \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCancelModel

try {
    $result = $apiInstance->cancel($targetAppId, $alipayEcoSignFlowCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoSignFlowApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **alipayEcoSignFlowCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($targetAppId, $alipayEcoSignFlowCreateModel): \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCreateResponseModel
```

创建流程（E签宝）

创建流程（E签宝）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoSignFlowApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$alipayEcoSignFlowCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCreateModel

try {
    $result = $apiInstance->create($targetAppId, $alipayEcoSignFlowCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoSignFlowApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **alipayEcoSignFlowCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoSignFlowCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `finish()`

```php
finish($targetAppId, $alipayEcoSignFlowFinishModel): object
```

签署流程归档

手动归档签署流程，归档后所有资源不可修改，归档前签署流程中的所有签署人必须都签署完成。如果创建流程时，设置了自动归档，则无需调用本接口，签署完成后系统会自动调用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoSignFlowApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$alipayEcoSignFlowFinishModel = new \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowFinishModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowFinishModel

try {
    $result = $apiInstance->finish($targetAppId, $alipayEcoSignFlowFinishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoSignFlowApi->finish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **alipayEcoSignFlowFinishModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoSignFlowFinishModel**|  | [optional]

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
query($targetAppId, $flowId): \Alipay\OpenAPISDK\Model\AlipayEcoSignFlowQueryResponseModel
```

签署流程查询（E签宝）

签署流程查询（E签宝）。可通过此接口查询流程、签署人的签署状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoSignFlowApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$flowId = 429b1d3038854cabbcdac0a63d7e4c0d; // string | 流程id，通过 <a href =\"https://opendocs.alipay.com/apis/api_50/alipay.eco.contract.signflows.create\">创建电子合同签署流程</a>(alipay.eco.contract.signflows.create)接口获取。

try {
    $result = $apiInstance->query($targetAppId, $flowId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoSignFlowApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **flowId** | **string**| 流程id，通过 &lt;a href &#x3D;\&quot;https://opendocs.alipay.com/apis/api_50/alipay.eco.contract.signflows.create\&quot;&gt;创建电子合同签署流程&lt;/a&gt;(alipay.eco.contract.signflows.create)接口获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoSignFlowQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
