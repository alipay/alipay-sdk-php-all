# Alipay\OpenAPISDK\KoubeiTradeOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](KoubeiTradeOrderApi.md#consult) | **POST** /v3/koubei/trade/order/consult | 口碑订单预咨询


## `consult()`

```php
consult($koubeiTradeOrderConsultModel): \Alipay\OpenAPISDK\Model\KoubeiTradeOrderConsultResponseModel
```

口碑订单预咨询

ISV下单前，可以通过此接口咨询用户优惠信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiTradeOrderApi(
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

$koubeiTradeOrderConsultModel = new \Alipay\OpenAPISDK\Model\KoubeiTradeOrderConsultModel(); // \Alipay\OpenAPISDK\Model\KoubeiTradeOrderConsultModel

try {
    $result = $apiInstance->consult($koubeiTradeOrderConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiTradeOrderApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiTradeOrderConsultModel** | **\Alipay\OpenAPISDK\Model\KoubeiTradeOrderConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiTradeOrderConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
