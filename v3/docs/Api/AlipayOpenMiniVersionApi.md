# Alipay\OpenAPISDK\AlipayOpenMiniVersionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete()**](AlipayOpenMiniVersionApi.md#delete) | **POST** /v3/alipay/open/mini/version/delete | 小程序删除版本
[**offline()**](AlipayOpenMiniVersionApi.md#offline) | **POST** /v3/alipay/open/mini/version/offline | 小程序下架
[**online()**](AlipayOpenMiniVersionApi.md#online) | **POST** /v3/alipay/open/mini/version/online | 小程序上架
[**rollback()**](AlipayOpenMiniVersionApi.md#rollback) | **POST** /v3/alipay/open/mini/version/rollback | 小程序回滚
[**upload()**](AlipayOpenMiniVersionApi.md#upload) | **POST** /v3/alipay/open/mini/version/upload | 小程序基于模板上传版本


## `delete()`

```php
delete($alipayOpenMiniVersionDeleteModel): object
```

小程序删除版本

小程序删除版本

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionApi(
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

$alipayOpenMiniVersionDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionDeleteModel

try {
    $result = $apiInstance->delete($alipayOpenMiniVersionDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionDeleteModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `offline()`

```php
offline($alipayOpenMiniVersionOfflineModel): object
```

小程序下架

小程序下架

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionApi(
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

$alipayOpenMiniVersionOfflineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOfflineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOfflineModel

try {
    $result = $apiInstance->offline($alipayOpenMiniVersionOfflineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionApi->offline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionOfflineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOfflineModel**|  | [optional]

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
online($alipayOpenMiniVersionOnlineModel): object
```

小程序上架

小程序上架

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionApi(
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

$alipayOpenMiniVersionOnlineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOnlineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOnlineModel

try {
    $result = $apiInstance->online($alipayOpenMiniVersionOnlineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionApi->online: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionOnlineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionOnlineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `rollback()`

```php
rollback($alipayOpenMiniVersionRollbackModel): object
```

小程序回滚

小程序回滚

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionApi(
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

$alipayOpenMiniVersionRollbackModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionRollbackModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionRollbackModel

try {
    $result = $apiInstance->rollback($alipayOpenMiniVersionRollbackModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionApi->rollback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionRollbackModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionRollbackModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `upload()`

```php
upload($alipayOpenMiniVersionUploadModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionUploadResponseModel
```

小程序基于模板上传版本

小程序基于模板上传版本

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionApi(
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

$alipayOpenMiniVersionUploadModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionUploadModel

try {
    $result = $apiInstance->upload($alipayOpenMiniVersionUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionUploadModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
