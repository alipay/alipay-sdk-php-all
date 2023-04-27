# Alipay\OpenAPISDK\AlipayTradeSettleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirm()**](AlipayTradeSettleApi.md#confirm) | **POST** /v3/alipay/trade/settle/confirm | 统一收单确认结算接口


## `confirm()`

```php
confirm($alipayTradeSettleConfirmModel): \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmResponseModel
```

统一收单确认结算接口

确认结算

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeSettleApi(
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

$alipayTradeSettleConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel

try {
    $result = $apiInstance->confirm($alipayTradeSettleConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeSettleApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeSettleConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
