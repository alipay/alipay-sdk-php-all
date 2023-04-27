# Alipay\OpenAPISDK\AlipayIserviceCcmSwSpuApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayIserviceCcmSwSpuApi.md#sync) | **POST** /v3/alipay/iservice/ccm/sw/spu/sync | 商品库-商品信息同步


## `sync()`

```php
sync($alipayIserviceCcmSwSpuSyncModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwSpuSyncResponseModel
```

商品库-商品信息同步

商品库-商品信息同步

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwSpuApi(
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

$alipayIserviceCcmSwSpuSyncModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwSpuSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwSpuSyncModel

try {
    $result = $apiInstance->sync($alipayIserviceCcmSwSpuSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwSpuApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwSpuSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwSpuSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwSpuSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
