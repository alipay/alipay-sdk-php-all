# Alipay\OpenAPISDK\AlipayTradeOverseasApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**settle()**](AlipayTradeOverseasApi.md#settle) | **POST** /v3/alipay/trade/overseas/settle | 统一境内收单跨境结算接口


## `settle()`

```php
settle($alipayTradeOverseasSettleModel): \Alipay\OpenAPISDK\Model\AlipayTradeOverseasSettleResponseModel
```

统一境内收单跨境结算接口

境内收单跨境结算

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeOverseasApi(
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

$alipayTradeOverseasSettleModel = new \Alipay\OpenAPISDK\Model\AlipayTradeOverseasSettleModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeOverseasSettleModel

try {
    $result = $apiInstance->settle($alipayTradeOverseasSettleModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeOverseasApi->settle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeOverseasSettleModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeOverseasSettleModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeOverseasSettleResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
