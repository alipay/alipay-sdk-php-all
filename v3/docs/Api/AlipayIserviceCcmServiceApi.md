# Alipay\OpenAPISDK\AlipayIserviceCcmServiceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**buy()**](AlipayIserviceCcmServiceApi.md#buy) | **POST** /v3/alipay/iservice/ccm/service/buy | 租户开通isv服务接口
[**close()**](AlipayIserviceCcmServiceApi.md#close) | **POST** /v3/alipay/iservice/ccm/service/close | 关闭租户开通的isv服务接口
[**initialize()**](AlipayIserviceCcmServiceApi.md#initialize) | **POST** /v3/alipay/iservice/ccm/service/initialize | isv服务初始化接口


## `buy()`

```php
buy($alipayIserviceCcmServiceBuyModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceBuyResponseModel
```

租户开通isv服务接口

租户购买了isv服务后，通知ccm开通服务

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmServiceApi(
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

$alipayIserviceCcmServiceBuyModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceBuyModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceBuyModel

try {
    $result = $apiInstance->buy($alipayIserviceCcmServiceBuyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmServiceApi->buy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmServiceBuyModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceBuyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceBuyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `close()`

```php
close($alipayIserviceCcmServiceCloseModel): object
```

关闭租户开通的isv服务接口

租户购买的ISV服务到期后，isv通知ccm关闭服务

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmServiceApi(
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

$alipayIserviceCcmServiceCloseModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceCloseModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceCloseModel

try {
    $result = $apiInstance->close($alipayIserviceCcmServiceCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmServiceApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmServiceCloseModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceCloseModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `initialize()`

```php
initialize($alipayIserviceCcmServiceInitializeModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceInitializeResponseModel
```

isv服务初始化接口

ISV调用此接口对接入CCM的服务代码、名称、描述等信息做初始化

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmServiceApi(
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

$alipayIserviceCcmServiceInitializeModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceInitializeModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceInitializeModel

try {
    $result = $apiInstance->initialize($alipayIserviceCcmServiceInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmServiceApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmServiceInitializeModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmServiceInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
