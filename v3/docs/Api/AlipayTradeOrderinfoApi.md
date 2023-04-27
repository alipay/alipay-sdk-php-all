# Alipay\OpenAPISDK\AlipayTradeOrderinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayTradeOrderinfoApi.md#sync) | **POST** /v3/alipay/trade/orderinfo/sync | 支付宝订单信息同步接口


## `sync()`

```php
sync($alipayTradeOrderinfoSyncModel): \Alipay\OpenAPISDK\Model\AlipayTradeOrderinfoSyncResponseModel
```

支付宝订单信息同步接口

该接口用于商户向支付宝同步该笔订单相关业务信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeOrderinfoApi(
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

$alipayTradeOrderinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayTradeOrderinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeOrderinfoSyncModel

try {
    $result = $apiInstance->sync($alipayTradeOrderinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeOrderinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeOrderinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeOrderinfoSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeOrderinfoSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
