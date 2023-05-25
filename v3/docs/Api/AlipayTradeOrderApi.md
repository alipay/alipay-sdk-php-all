# Alipay\OpenAPISDK\AlipayTradeOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**pay()**](AlipayTradeOrderApi.md#pay) | **POST** /v3/alipay/trade/order/pay | 统一收单交易订单支付接口
[**settle()**](AlipayTradeOrderApi.md#settle) | **POST** /v3/alipay/trade/order/settle | 统一收单交易结算接口


## `pay()`

```php
pay($alipayTradeOrderPayModel): \Alipay\OpenAPISDK\Model\AlipayTradeOrderPayResponseModel
```

统一收单交易订单支付接口

商户用已创建的交易进行支付（需要使用该接口请联系接口owner）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeOrderApi(
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

$alipayTradeOrderPayModel = new \Alipay\OpenAPISDK\Model\AlipayTradeOrderPayModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeOrderPayModel

try {
    $result = $apiInstance->pay($alipayTradeOrderPayModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeOrderApi->pay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeOrderPayModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeOrderPayModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeOrderPayResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `settle()`

```php
settle($alipayTradeOrderSettleModel): \Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleResponseModel
```

统一收单交易结算接口

用于在卖家交易成功之后，基于交易订单，进行卖家与第三方（如供应商或平台商）的资金再分配。一般用于第三方从卖家抽佣场景。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeOrderApi(
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

$alipayTradeOrderSettleModel = new \Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleModel

try {
    $result = $apiInstance->settle($alipayTradeOrderSettleModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeOrderApi->settle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeOrderSettleModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeOrderSettleResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
