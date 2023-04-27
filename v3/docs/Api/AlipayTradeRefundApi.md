# Alipay\OpenAPISDK\AlipayTradeRefundApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayTradeRefundApi.md#apply) | **POST** /v3/alipay/trade/refund/apply | 异步退款受理接口


## `apply()`

```php
apply($alipayTradeRefundApplyModel): \Alipay\OpenAPISDK\Model\AlipayTradeRefundApplyResponseModel
```

异步退款受理接口

商户通过此接口提交异步退款请求，支付宝受理后，将会异步进行退款处理。退款完成后异步通知商户退款结果，商户可以通过alipay.trade.fastpay.refund.query接口查询退款状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeRefundApi(
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

$alipayTradeRefundApplyModel = new \Alipay\OpenAPISDK\Model\AlipayTradeRefundApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeRefundApplyModel

try {
    $result = $apiInstance->apply($alipayTradeRefundApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeRefundApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeRefundApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeRefundApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeRefundApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
