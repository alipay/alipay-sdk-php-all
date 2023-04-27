# Alipay\OpenAPISDK\AlipayEcoMycarParkingPaymentinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEcoMycarParkingPaymentinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/paymentinfo/sync | 车辆停车缴费接口


## `sync()`

```php
sync($alipayEcoMycarParkingPaymentinfoSyncModel): object
```

车辆停车缴费接口

上传车辆在停车场的缴费信息，将停车动作推进到计费状态，上传信息通过该接口提交到支付宝，支付宝返回对应的信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingPaymentinfoApi(
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

$alipayEcoMycarParkingPaymentinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingPaymentinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingPaymentinfoSyncModel

try {
    $result = $apiInstance->sync($alipayEcoMycarParkingPaymentinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingPaymentinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoMycarParkingPaymentinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingPaymentinfoSyncModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
