# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete()**](AlipayOpenMiniInnerversionInfoApi.md#delete) | **DELETE** /v3/alipay/open/mini/innerversion/info/delete | 内部链路删除版本
[**query()**](AlipayOpenMiniInnerversionInfoApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/info/query | 内部链路小程序版本信息查询


## `delete()`

```php
delete($miniAppId, $appOrigin, $bundleId, $appVersion, $pid, $instCode): object
```

内部链路删除版本

针对一二方场景的开发者，小程序提供一套统一的内部能力体系，定向输出赋能，本接口主要用于删除版本

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionInfoApi(
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

$miniAppId = 2018********; // string | 小程序ID
$appOrigin = ASTORE; // string | 业务场景来源
$bundleId = com.alipay.alipaywallet; // string | 端信息
$appVersion = 0.0.1; // string | 小程序版本号
$pid = 2088*******; // string | 操作者ID，支付宝租户必填
$instCode = alipay; // string | 租户信息

try {
    $result = $apiInstance->delete($miniAppId, $appOrigin, $bundleId, $appVersion, $pid, $instCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionInfoApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 小程序ID | [optional]
 **appOrigin** | **string**| 业务场景来源 | [optional]
 **bundleId** | **string**| 端信息 | [optional]
 **appVersion** | **string**| 小程序版本号 | [optional]
 **pid** | **string**| 操作者ID，支付宝租户必填 | [optional]
 **instCode** | **string**| 租户信息 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($bundleId, $miniAppId, $appVersion, $appOrigin): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionInfoQueryResponseModel
```

内部链路小程序版本信息查询

小程序提供一套针对一二方场景的开发者提供一套统一的内部能力开放体系，定向输出赋能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionInfoApi(
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

$bundleId = 支付宝：com.alipay.alipaywallet 高德：com.amap.app; // string | 端信息
$miniAppId = 2019****; // string | 小程序ID
$appVersion = 0.0.1; // string | 查询版本号
$appOrigin = https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang; // string | 业务来源，新接入方需要向支付宝申请专用来源，否则不予接入。https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang

try {
    $result = $apiInstance->query($bundleId, $miniAppId, $appVersion, $appOrigin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundleId** | **string**| 端信息 | [optional]
 **miniAppId** | **string**| 小程序ID | [optional]
 **appVersion** | **string**| 查询版本号 | [optional]
 **appOrigin** | **string**| 业务来源，新接入方需要向支付宝申请专用来源，否则不予接入。https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
