# Alipay\OpenAPISDK\AlipayOpenMiniVersionGrayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayOpenMiniVersionGrayApi.md#cancel) | **POST** /v3/alipay/open/mini/version/gray/cancel | 小程序结束灰度
[**online()**](AlipayOpenMiniVersionGrayApi.md#online) | **POST** /v3/alipay/open/mini/version/gray/online | 小程序灰度上架


## `cancel()`

```php
cancel($alipayOpenMiniVersionGrayCancelModel): object
```

小程序结束灰度

小程序结束灰度

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionGrayApi(
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

$alipayOpenMiniVersionGrayCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenMiniVersionGrayCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionGrayApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionGrayCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `online()`

```php
online($alipayOpenMiniVersionGrayOnlineModel): object
```

小程序灰度上架

小程序灰度上架

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionGrayApi(
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

$alipayOpenMiniVersionGrayOnlineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayOnlineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayOnlineModel

try {
    $result = $apiInstance->online($alipayOpenMiniVersionGrayOnlineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionGrayApi->online: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionGrayOnlineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionGrayOnlineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
