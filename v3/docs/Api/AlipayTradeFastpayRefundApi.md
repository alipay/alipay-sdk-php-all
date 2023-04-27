# Alipay\OpenAPISDK\AlipayTradeFastpayRefundApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayTradeFastpayRefundApi.md#query) | **POST** /v3/alipay/trade/fastpay/refund/query | 统一收单交易退款查询


## `query()`

```php
query($alipayTradeFastpayRefundQueryModel): \Alipay\OpenAPISDK\Model\AlipayTradeFastpayRefundQueryResponseModel
```

统一收单交易退款查询

商户可使用该接口查询自已通过alipay.trade.refund提交的退款请求是否执行成功。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeFastpayRefundApi(
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

$alipayTradeFastpayRefundQueryModel = new \Alipay\OpenAPISDK\Model\AlipayTradeFastpayRefundQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeFastpayRefundQueryModel

try {
    $result = $apiInstance->query($alipayTradeFastpayRefundQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeFastpayRefundApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeFastpayRefundQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeFastpayRefundQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeFastpayRefundQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
