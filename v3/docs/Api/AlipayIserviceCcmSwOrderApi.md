# Alipay\OpenAPISDK\AlipayIserviceCcmSwOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayIserviceCcmSwOrderApi.md#sync) | **POST** /v3/alipay/iservice/ccm/sw/order/sync | 商品订单同步


## `sync()`

```php
sync($alipayIserviceCcmSwOrderSyncModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwOrderSyncResponseModel
```

商品订单同步

商品订单同步

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwOrderApi(
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

$alipayIserviceCcmSwOrderSyncModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwOrderSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwOrderSyncModel

try {
    $result = $apiInstance->sync($alipayIserviceCcmSwOrderSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwOrderApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwOrderSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwOrderSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwOrderSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
