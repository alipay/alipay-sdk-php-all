# Alipay\OpenAPISDK\AlipayOpenMiniInnerappPluginuseconfigApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayOpenMiniInnerappPluginuseconfigApi.md#cancel) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/cancel | 撤销插件端版本配置灰度
[**online()**](AlipayOpenMiniInnerappPluginuseconfigApi.md#online) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/online | 上线插件使用端版本配置
[**upgrade()**](AlipayOpenMiniInnerappPluginuseconfigApi.md#upgrade) | **POST** /v3/alipay/open/mini/innerapp/pluginuseconfig/upgrade | 灰度端版本配置


## `cancel()`

```php
cancel($alipayOpenMiniInnerappPluginuseconfigCancelModel): object
```

撤销插件端版本配置灰度

结束插件端版本配置灰度

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginuseconfigApi(
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

$alipayOpenMiniInnerappPluginuseconfigCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenMiniInnerappPluginuseconfigCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginuseconfigApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginuseconfigCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigCancelModel**|  | [optional]

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
online($alipayOpenMiniInnerappPluginuseconfigOnlineModel): object
```

上线插件使用端版本配置

小程序使用插件版本全量上线

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginuseconfigApi(
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

$alipayOpenMiniInnerappPluginuseconfigOnlineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigOnlineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigOnlineModel

try {
    $result = $apiInstance->online($alipayOpenMiniInnerappPluginuseconfigOnlineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginuseconfigApi->online: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginuseconfigOnlineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigOnlineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `upgrade()`

```php
upgrade($alipayOpenMiniInnerappPluginuseconfigUpgradeModel): object
```

灰度端版本配置

升级/降级 端版本配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginuseconfigApi(
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

$alipayOpenMiniInnerappPluginuseconfigUpgradeModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigUpgradeModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigUpgradeModel

try {
    $result = $apiInstance->upgrade($alipayOpenMiniInnerappPluginuseconfigUpgradeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginuseconfigApi->upgrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginuseconfigUpgradeModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginuseconfigUpgradeModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
