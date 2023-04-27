# Alipay\OpenAPISDK\AlipayOpenMiniResourceRecordApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notify()**](AlipayOpenMiniResourceRecordApi.md#notify) | **POST** /v3/alipay/open/mini/resource/record/notify | 提供给淘联盟备案信息接口


## `notify()`

```php
notify($alipayOpenMiniResourceRecordNotifyModel): object
```

提供给淘联盟备案信息接口

淘联盟定制回调接口，用户流量插件账号打通场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniResourceRecordApi(
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

$alipayOpenMiniResourceRecordNotifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniResourceRecordNotifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniResourceRecordNotifyModel

try {
    $result = $apiInstance->notify($alipayOpenMiniResourceRecordNotifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniResourceRecordApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniResourceRecordNotifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniResourceRecordNotifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
