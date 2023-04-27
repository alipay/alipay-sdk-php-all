# Alipay\OpenAPISDK\AlipayTradeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayTradeApi.md#cancel) | **POST** /v3/alipay/trade/cancel | 统一收单交易撤销接口
[**close()**](AlipayTradeApi.md#close) | **POST** /v3/alipay/trade/close | 统一收单交易关闭接口
[**create()**](AlipayTradeApi.md#create) | **POST** /v3/alipay/trade/create | 统一收单交易创建接口
[**pay()**](AlipayTradeApi.md#pay) | **POST** /v3/alipay/trade/pay | 统一收单交易支付接口
[**precreate()**](AlipayTradeApi.md#precreate) | **POST** /v3/alipay/trade/precreate | 统一收单线下交易预创建
[**query()**](AlipayTradeApi.md#query) | **POST** /v3/alipay/trade/query | 统一收单交易查询
[**refund()**](AlipayTradeApi.md#refund) | **POST** /v3/alipay/trade/refund | 统一收单交易退款接口


## `cancel()`

```php
cancel($alipayTradeCancelModel): \Alipay\OpenAPISDK\Model\AlipayTradeCancelResponseModel
```

统一收单交易撤销接口

支付交易返回失败或支付系统超时，调用该接口撤销交易。如果此订单用户支付失败，支付宝系统会将此订单关闭；如果用户支付成功，支付宝系统会将此订单资金退还给用户。  注意：只有发生支付系统超时或者支付结果未知时可调用撤销，其他正常支付的单如需实现相同功能请调用申请退款API。提交支付交易后调用【查询订单API】，没有明确的支付结果再调用【撤销订单API】。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradeCancelModel = new \Alipay\OpenAPISDK\Model\AlipayTradeCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeCancelModel

try {
    $result = $apiInstance->cancel($alipayTradeCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeCancelModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeCancelResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `close()`

```php
close($alipayTradeCloseModel): \Alipay\OpenAPISDK\Model\AlipayTradeCloseResponseModel
```

统一收单交易关闭接口

用于交易创建后，用户在一定时间内未进行支付，可调用该接口直接将未付款的交易进行关闭。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradeCloseModel = new \Alipay\OpenAPISDK\Model\AlipayTradeCloseModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeCloseModel

try {
    $result = $apiInstance->close($alipayTradeCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeCloseModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeCloseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeCloseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayTradeCreateModel): \Alipay\OpenAPISDK\Model\AlipayTradeCreateResponseModel
```

统一收单交易创建接口

商户通过该接口进行交易的创建下单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradeCreateModel = new \Alipay\OpenAPISDK\Model\AlipayTradeCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeCreateModel

try {
    $result = $apiInstance->create($alipayTradeCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `pay()`

```php
pay($alipayTradePayModel): \Alipay\OpenAPISDK\Model\AlipayTradePayResponseModel
```

统一收单交易支付接口

收银员使用扫码设备读取用户手机支付宝“付款码”获取设备（如扫码枪）读取用户手机支付宝的付款码信息后，将二维码或条码信息通过本接口上送至支付宝发起支付。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradePayModel = new \Alipay\OpenAPISDK\Model\AlipayTradePayModel(); // \Alipay\OpenAPISDK\Model\AlipayTradePayModel

try {
    $result = $apiInstance->pay($alipayTradePayModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->pay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradePayModel** | **\Alipay\OpenAPISDK\Model\AlipayTradePayModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradePayResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `precreate()`

```php
precreate($alipayTradePrecreateModel): \Alipay\OpenAPISDK\Model\AlipayTradePrecreateResponseModel
```

统一收单线下交易预创建

收银员通过收银台或商户后台调用支付宝接口，生成二维码后，展示给用户，由用户扫描二维码完成订单支付。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradePrecreateModel = new \Alipay\OpenAPISDK\Model\AlipayTradePrecreateModel(); // \Alipay\OpenAPISDK\Model\AlipayTradePrecreateModel

try {
    $result = $apiInstance->precreate($alipayTradePrecreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->precreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradePrecreateModel** | **\Alipay\OpenAPISDK\Model\AlipayTradePrecreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradePrecreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($alipayTradeQueryModel): \Alipay\OpenAPISDK\Model\AlipayTradeQueryResponseModel
```

统一收单交易查询

该接口提供所有支付宝支付订单的查询，商户可以通过该接口主动查询订单状态，完成下一步的业务逻辑。  需要调用查询接口的情况：  当商户后台、网络、服务器等出现异常，商户系统最终未接收到支付通知；  调用支付接口后，返回系统错误或未知交易状态情况；  调用alipay.trade.pay，返回INPROCESS的状态；  调用alipay.trade.cancel之前，需确认支付状态；

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradeQueryModel = new \Alipay\OpenAPISDK\Model\AlipayTradeQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeQueryModel

try {
    $result = $apiInstance->query($alipayTradeQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($alipayTradeRefundModel): \Alipay\OpenAPISDK\Model\AlipayTradeRefundResponseModel
```

统一收单交易退款接口

当交易发生之后一段时间内，由于买家或者卖家的原因需要退款时，卖家可以通过退款接口将支付款退还给买家，支付宝将在收到退款请求并且验证成功之后，按照退款规则将支付款按原路退到买家帐号上。 交易超过约定时间（签约时设置的可退款时间）的订单无法进行退款。  支付宝退款支持单笔交易分多次退款，多次退款需要提交原支付订单的订单号和设置不同的退款请求号。一笔退款失败后重新提交，要保证重试时退款请求号不能变更，防止该笔交易重复退款。  同一笔交易累计提交的退款金额不能超过原始交易总金额。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApi(
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

$alipayTradeRefundModel = new \Alipay\OpenAPISDK\Model\AlipayTradeRefundModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeRefundModel

try {
    $result = $apiInstance->refund($alipayTradeRefundModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeRefundModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeRefundModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeRefundResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
