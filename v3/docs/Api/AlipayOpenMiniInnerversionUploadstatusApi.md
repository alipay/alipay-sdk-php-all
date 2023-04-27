# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionUploadstatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerversionUploadstatusApi.md#query) | **GET** /v3/alipay/open/mini/innerversion/uploadstatus/query | 多端小程序-查询构建状态


## `query()`

```php
query($buildPackageId, $miniAppId, $buildVersion, $instCode, $bundleId): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionUploadstatusQueryResponseModel
```

多端小程序-查询构建状态

查询构建状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionUploadstatusApi(
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

$buildPackageId = 34818; // string | 包管理ID，用于查询打包状态
$miniAppId = 2018012201365222; // string | 小程序ID
$buildVersion = 0.0.5; // string | 小程序版本
$instCode = taobao; // string | 租户id
$bundleId = com.taobao.app; // string | 端信息

try {
    $result = $apiInstance->query($buildPackageId, $miniAppId, $buildVersion, $instCode, $bundleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionUploadstatusApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buildPackageId** | **string**| 包管理ID，用于查询打包状态 | [optional]
 **miniAppId** | **string**| 小程序ID | [optional]
 **buildVersion** | **string**| 小程序版本 | [optional]
 **instCode** | **string**| 租户id | [optional]
 **bundleId** | **string**| 端信息 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionUploadstatusQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
