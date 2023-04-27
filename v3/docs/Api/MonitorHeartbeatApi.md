# Alipay\OpenAPISDK\MonitorHeartbeatApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**syn()**](MonitorHeartbeatApi.md#syn) | **POST** /v3/monitor/heartbeat/syn | 验签接口


## `syn()`

```php
syn($monitorHeartbeatSynModel): \Alipay\OpenAPISDK\Model\MonitorHeartbeatSynResponseModel
```

验签接口

本质上是金融云验签接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\MonitorHeartbeatApi(
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

$monitorHeartbeatSynModel = new \Alipay\OpenAPISDK\Model\MonitorHeartbeatSynModel(); // \Alipay\OpenAPISDK\Model\MonitorHeartbeatSynModel

try {
    $result = $apiInstance->syn($monitorHeartbeatSynModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitorHeartbeatApi->syn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitorHeartbeatSynModel** | **\Alipay\OpenAPISDK\Model\MonitorHeartbeatSynModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\MonitorHeartbeatSynResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
