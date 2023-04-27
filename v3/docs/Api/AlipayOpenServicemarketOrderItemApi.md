# Alipay\OpenAPISDK\AlipayOpenServicemarketOrderItemApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayOpenServicemarketOrderItemApi.md#cancel) | **POST** /v3/alipay/open/servicemarket/order/item/cancel | 服务订单明细实施项单项取消
[**complete()**](AlipayOpenServicemarketOrderItemApi.md#complete) | **POST** /v3/alipay/open/servicemarket/order/item/complete | 服务商完成订单内单个明细实施项
[**confirm()**](AlipayOpenServicemarketOrderItemApi.md#confirm) | **POST** /v3/alipay/open/servicemarket/order/item/confirm | 服务商代商家确认实施完成


## `cancel()`

```php
cancel($alipayOpenServicemarketOrderItemCancelModel): object
```

服务订单明细实施项单项取消

服务商可以单个取消订单明细实施项

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderItemApi(
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

$alipayOpenServicemarketOrderItemCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenServicemarketOrderItemCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderItemApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketOrderItemCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `complete()`

```php
complete($alipayOpenServicemarketOrderItemCompleteModel): object
```

服务商完成订单内单个明细实施项

商户在订购插件后，服务商完成实施操作，此接口会检测当前订单必须所属当前操作服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderItemApi(
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

$alipayOpenServicemarketOrderItemCompleteModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCompleteModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCompleteModel

try {
    $result = $apiInstance->complete($alipayOpenServicemarketOrderItemCompleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderItemApi->complete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketOrderItemCompleteModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemCompleteModel**|  | [optional]

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
confirm($alipayOpenServicemarketOrderItemConfirmModel): object
```

服务商代商家确认实施完成

此接口需商家授权服务商应用权限后，服务商可代商家进行实施确认完成动作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderItemApi(
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

$alipayOpenServicemarketOrderItemConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemConfirmModel

try {
    $result = $apiInstance->confirm($alipayOpenServicemarketOrderItemConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderItemApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketOrderItemConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderItemConfirmModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
