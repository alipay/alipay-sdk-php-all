# Alipay\OpenAPISDK\ZhimaCreditPeZmgoCumulationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](ZhimaCreditPeZmgoCumulationApi.md#sync) | **POST** /v3/zhima/credit/pe/zmgo/cumulation/sync | 芝麻go用户数据回传


## `sync()`

```php
sync($zhimaCreditPeZmgoCumulationSyncModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoCumulationSyncResponseModel
```

芝麻go用户数据回传

芝麻go商户通过此api接口，将用户行为数据回传到芝麻侧，数据包括：交易型数据（订单信息、优惠信息）和非交易型数据（用户完成任务次数）。芝麻侧将回传的数据在C端向用户展示，并且在结算时对结算金额进行校验（可选）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoCumulationApi(
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

$zhimaCreditPeZmgoCumulationSyncModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoCumulationSyncModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoCumulationSyncModel

try {
    $result = $apiInstance->sync($zhimaCreditPeZmgoCumulationSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoCumulationApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoCumulationSyncModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoCumulationSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoCumulationSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
