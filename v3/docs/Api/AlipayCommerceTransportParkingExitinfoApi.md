# Alipay\OpenAPISDK\AlipayCommerceTransportParkingExitinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayCommerceTransportParkingExitinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/parking/exitinfo/sync | 停车离场消息模板配置


## `sync()`

```php
sync($alipayCommerceTransportParkingExitinfoSyncModel): \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingExitinfoSyncResponseModel
```

停车离场消息模板配置

用户要驶离停车场时，服务商通过此接口配置消息模板内容告知支付宝发送给用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceTransportParkingExitinfoApi(
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

$alipayCommerceTransportParkingExitinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingExitinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingExitinfoSyncModel

try {
    $result = $apiInstance->sync($alipayCommerceTransportParkingExitinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceTransportParkingExitinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceTransportParkingExitinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingExitinfoSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceTransportParkingExitinfoSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
