# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionAuditApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayOpenMiniInnerversionAuditApi.md#cancel) | **POST** /v3/alipay/open/mini/innerversion/audit/cancel | 内部链路撤销审核
[**submit()**](AlipayOpenMiniInnerversionAuditApi.md#submit) | **POST** /v3/alipay/open/mini/innerversion/audit/submit | 小程序版本提交审核


## `cancel()`

```php
cancel($alipayOpenMiniInnerversionAuditCancelModel): object
```

内部链路撤销审核

小程序提供一套针对一二方场景的开发者提供一套统一的内部能力开放体系，定向输出赋能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionAuditApi(
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

$alipayOpenMiniInnerversionAuditCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenMiniInnerversionAuditCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionAuditApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionAuditCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `submit()`

```php
submit($alipayOpenMiniInnerversionAuditSubmitModel): object
```

小程序版本提交审核

小程序版本提交审核，审核申请完结后会通过From蚂蚁消息通知到开发者。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionAuditApi(
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

$alipayOpenMiniInnerversionAuditSubmitModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditSubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditSubmitModel

try {
    $result = $apiInstance->submit($alipayOpenMiniInnerversionAuditSubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionAuditApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionAuditSubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionAuditSubmitModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
