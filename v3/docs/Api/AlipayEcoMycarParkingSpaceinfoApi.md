# Alipay\OpenAPISDK\AlipayEcoMycarParkingSpaceinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayEcoMycarParkingSpaceinfoApi.md#sync) | **POST** /v3/alipay/eco/mycar/parking/spaceinfo/sync | 停车场车位信息同步


## `sync()`

```php
sync($alipayEcoMycarParkingSpaceinfoSyncModel): \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingSpaceinfoSyncResponseModel
```

停车场车位信息同步

停车场位置信息同步

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingSpaceinfoApi(
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

$alipayEcoMycarParkingSpaceinfoSyncModel = new \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingSpaceinfoSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingSpaceinfoSyncModel

try {
    $result = $apiInstance->sync($alipayEcoMycarParkingSpaceinfoSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingSpaceinfoApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoMycarParkingSpaceinfoSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingSpaceinfoSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingSpaceinfoSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
