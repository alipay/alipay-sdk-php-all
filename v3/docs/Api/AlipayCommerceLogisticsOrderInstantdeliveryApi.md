# Alipay\OpenAPISDK\AlipayCommerceLogisticsOrderInstantdeliveryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayCommerceLogisticsOrderInstantdeliveryApi.md#cancel) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/cancel | 取消即时配送订单
[**create()**](AlipayCommerceLogisticsOrderInstantdeliveryApi.md#create) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/create | 下即时配送订单
[**precreate()**](AlipayCommerceLogisticsOrderInstantdeliveryApi.md#precreate) | **POST** /v3/alipay/commerce/logistics/order/instantdelivery/precreate | 预下即时配送订单


## `cancel()`

```php
cancel($alipayCommerceLogisticsOrderInstantdeliveryCancelModel): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCancelResponseModel
```

取消即时配送订单

取消即时配送订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsOrderInstantdeliveryApi(
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

$alipayCommerceLogisticsOrderInstantdeliveryCancelModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCancelModel

try {
    $result = $apiInstance->cancel($alipayCommerceLogisticsOrderInstantdeliveryCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsOrderInstantdeliveryApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceLogisticsOrderInstantdeliveryCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCancelModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCancelResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayCommerceLogisticsOrderInstantdeliveryCreateModel): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel
```

下即时配送订单

下即时配送订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsOrderInstantdeliveryApi(
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

$alipayCommerceLogisticsOrderInstantdeliveryCreateModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCreateModel

try {
    $result = $apiInstance->create($alipayCommerceLogisticsOrderInstantdeliveryCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsOrderInstantdeliveryApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceLogisticsOrderInstantdeliveryCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `precreate()`

```php
precreate($alipayCommerceLogisticsOrderInstantdeliveryPrecreateModel): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryPrecreateResponseModel
```

预下即时配送订单

预下即时配送订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsOrderInstantdeliveryApi(
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

$alipayCommerceLogisticsOrderInstantdeliveryPrecreateModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel

try {
    $result = $apiInstance->precreate($alipayCommerceLogisticsOrderInstantdeliveryPrecreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsOrderInstantdeliveryApi->precreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceLogisticsOrderInstantdeliveryPrecreateModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderInstantdeliveryPrecreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
