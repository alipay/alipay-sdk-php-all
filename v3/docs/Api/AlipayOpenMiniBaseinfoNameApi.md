# Alipay\OpenAPISDK\AlipayOpenMiniBaseinfoNameApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**check()**](AlipayOpenMiniBaseinfoNameApi.md#check) | **GET** /v3/alipay/open/mini/baseinfo/name/check | 小程序名称检测


## `check()`

```php
check($appName): \Alipay\OpenAPISDK\Model\AlipayOpenMiniBaseinfoNameCheckResponseModel
```

小程序名称检测

小程序名称检测。包含小程序名称基础校验、名称重复、存在敏感信息、存在品牌词、名称宽泛等检测能力。若返回“check_code”：“NONE”，说明小程序名称未检测出异常。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniBaseinfoNameApi(
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

$appName = 吱声小铺; // string | 小程序名字，长度限制 3~30 个字符，仅支持包含简体中文、数字、英文、下划线、+、-。

try {
    $result = $apiInstance->check($appName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniBaseinfoNameApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appName** | **string**| 小程序名字，长度限制 3~30 个字符，仅支持包含简体中文、数字、英文、下划线、+、-。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniBaseinfoNameCheckResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
