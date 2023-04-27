# Alipay\OpenAPISDK\AlipayOpenServicemarketOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accept()**](AlipayOpenServicemarketOrderApi.md#accept) | **POST** /v3/alipay/open/servicemarket/order/accept | 服务商接单操作
[**create()**](AlipayOpenServicemarketOrderApi.md#create) | **POST** /v3/alipay/open/servicemarket/order/create | 服务市场代订购小程序
[**notify()**](AlipayOpenServicemarketOrderApi.md#notify) | **POST** /v3/alipay/open/servicemarket/order/notify | 服务市场商户确认订购通知
[**query()**](AlipayOpenServicemarketOrderApi.md#query) | **GET** /v3/alipay/open/servicemarket/order/query | 订购插件订单明细查询
[**reject()**](AlipayOpenServicemarketOrderApi.md#reject) | **POST** /v3/alipay/open/servicemarket/order/reject | 服务商拒绝接单


## `accept()`

```php
accept($alipayOpenServicemarketOrderAcceptModel): object
```

服务商接单操作

商户订购服务插件之后，需要服务商接单，调用此接口可完成接单操作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderApi(
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

$alipayOpenServicemarketOrderAcceptModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderAcceptModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderAcceptModel

try {
    $result = $apiInstance->accept($alipayOpenServicemarketOrderAcceptModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderApi->accept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketOrderAcceptModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderAcceptModel**|  | [optional]

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
create($appLogo, $data): \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderCreateResponseModel
```

服务市场代订购小程序

第三方服务商可以创建服务市场的订单，并代为创建小程序应用，小程序应用授权给服务商

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderApi(
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

$appLogo = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderCreateModel

try {
    $result = $apiInstance->create($appLogo, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appLogo** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `notify()`

```php
notify($commonNotifyUrlModel): object
```

服务市场商户确认订购通知

服务市场当商户选择服务商提供产品并订购确认时，通知服务商订单消息。服务商可以通过通知的消息内容回查该订单明细。回查接口（alipay.open.servicemarket.order.query）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderApi(
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

$commonNotifyUrlModel = new \Alipay\OpenAPISDK\Model\CommonNotifyUrlModel(); // \Alipay\OpenAPISDK\Model\CommonNotifyUrlModel

try {
    $result = $apiInstance->notify($commonNotifyUrlModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commonNotifyUrlModel** | **\Alipay\OpenAPISDK\Model\CommonNotifyUrlModel**|  | [optional]

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
query($commodityOrderId, $startPage): \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderQueryResponseModel
```

订购插件订单明细查询

第三方服务商提供服务产品被商户订购后，服务市场会推送订单信息给服务商，服务商根据订单号回查该订单明细信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderApi(
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

$commodityOrderId = 20160010200000000033400; // string | 订购服务订单ID，通过支付宝发送的 https://opendocs.alipay.com/apis/api_3/alipay.open.servicemarket.order.notify(服务市场商户确认订购通知) 通知获取。
$startPage = 1; // string | 查询开始页码，1 为第一页。

try {
    $result = $apiInstance->query($commodityOrderId, $startPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commodityOrderId** | **string**| 订购服务订单ID，通过支付宝发送的 https://opendocs.alipay.com/apis/api_3/alipay.open.servicemarket.order.notify(服务市场商户确认订购通知) 通知获取。 | [optional]
 **startPage** | **string**| 查询开始页码，1 为第一页。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `reject()`

```php
reject($alipayOpenServicemarketOrderRejectModel): object
```

服务商拒绝接单

服务商可以拒接商户购买服务插件订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenServicemarketOrderApi(
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

$alipayOpenServicemarketOrderRejectModel = new \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderRejectModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderRejectModel

try {
    $result = $apiInstance->reject($alipayOpenServicemarketOrderRejectModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenServicemarketOrderApi->reject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenServicemarketOrderRejectModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenServicemarketOrderRejectModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
