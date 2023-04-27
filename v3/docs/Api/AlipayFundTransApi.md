# Alipay\OpenAPISDK\AlipayFundTransApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**pay()**](AlipayFundTransApi.md#pay) | **POST** /v3/alipay/fund/trans/pay | 资金支付接口
[**refund()**](AlipayFundTransApi.md#refund) | **POST** /v3/alipay/fund/trans/refund | 资金退回接口


## `pay()`

```php
pay($alipayFundTransPayModel): \Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel
```

资金支付接口

付款方通过协议、二维码、声波、人脸等方式，通过本接口提交给支付宝直接完成支付。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransApi(
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

$alipayFundTransPayModel = new \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel(); // \Alipay\OpenAPISDK\Model\AlipayFundTransPayModel

try {
    $result = $apiInstance->pay($alipayFundTransPayModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransApi->pay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundTransPayModel** | **\Alipay\OpenAPISDK\Model\AlipayFundTransPayModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransPayResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($alipayFundTransRefundModel): \Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel
```

资金退回接口

当资金支付一段时间后，由于收款方一直没有收钱（比如抢红包），可以通过退款接口将资金退换给付款方。支付宝将会按照退款规则将支付款按原路退到付款方帐号上。   交易超过约定时间（签约时设置的可退款时间）的订单无法进行退款。支付宝退款支持单笔交易分多次退回，多次退款需要提交原支付订单的商户订单号和设置不同的退款单号。一笔退款失败后重新提交，要采用原来的退款单号。总退款金额不能超过（用户实际支付金额-已领红包）的金额。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransApi(
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

$alipayFundTransRefundModel = new \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel(); // \Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel

try {
    $result = $apiInstance->refund($alipayFundTransRefundModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundTransRefundModel** | **\Alipay\OpenAPISDK\Model\AlipayFundTransRefundModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransRefundResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
