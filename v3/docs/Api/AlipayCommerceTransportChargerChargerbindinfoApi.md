# Alipay\OpenAPISDK\AlipayCommerceTransportChargerChargerbindinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayCommerceTransportChargerChargerbindinfoApi.md#sync) | **POST** /v3/alipay/commerce/transport/charger/chargerbindinfo/sync | 充电运营商同步用户绑定充电桩信息接口


## `sync()`

```php
sync($authToken, $alipayCommerceTransportChargerChargerbindinfoSyncModel): \Alipay\OpenAPISDK\Model\AlipayCommerceTransportChargerChargerbindinfoSyncResponseModel
```

充电运营商同步用户绑定充电桩信息接口

设备运营商通过该接口同步自己阵地中用户绑定充电桩的信息，包含绑定信息，解绑信息，设备状态等等设备信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceTransportChargerChargerbindinfoApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$alipayCommerceTransportChargerChargerbindinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceTransportChargerChargerbindinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceTransportChargerChargerbindinfoSyncModel

try {
    $result = $apiInstance->sync($authToken, $alipayCommerceTransportChargerChargerbindinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceTransportChargerChargerbindinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayCommerceTransportChargerChargerbindinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceTransportChargerChargerbindinfoSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceTransportChargerChargerbindinfoSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
