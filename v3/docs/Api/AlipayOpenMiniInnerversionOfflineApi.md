# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionOfflineApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**publish()**](AlipayOpenMiniInnerversionOfflineApi.md#publish) | **POST** /v3/alipay/open/mini/innerversion/offline/publish | 内部链路小程序下架


## `publish()`

```php
publish($alipayOpenMiniInnerversionOfflinePublishModel): object
```

内部链路小程序下架

小程序提供一套针对一二方场景的开发者提供一套统一的内部能力开放体系，定向输出赋能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionOfflineApi(
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

$alipayOpenMiniInnerversionOfflinePublishModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionOfflinePublishModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionOfflinePublishModel

try {
    $result = $apiInstance->publish($alipayOpenMiniInnerversionOfflinePublishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionOfflineApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionOfflinePublishModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionOfflinePublishModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
