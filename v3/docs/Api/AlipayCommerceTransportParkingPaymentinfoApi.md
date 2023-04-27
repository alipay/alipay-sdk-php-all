# Alipay\OpenAPISDK\AlipayCommerceTransportParkingPaymentinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayCommerceTransportParkingPaymentinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/parking/paymentinfo/sync | 停车支付模板消息配置


## `sync()`

```php
sync($alipayCommerceTransportParkingPaymentinfoSyncModel): \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingPaymentinfoSyncResponseModel
```

停车支付模板消息配置

用户在场内支付时，服务商通过此接口配置消息模板内容告知支付宝发送给用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceTransportParkingPaymentinfoApi(
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

$alipayCommerceTransportParkingPaymentinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingPaymentinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingPaymentinfoSyncModel

try {
    $result = $apiInstance->sync($alipayCommerceTransportParkingPaymentinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceTransportParkingPaymentinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceTransportParkingPaymentinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingPaymentinfoSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingPaymentinfoSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
