# Alipay\OpenAPISDK\AlipayOpenPublicPayeeBindApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenPublicPayeeBindApi.md#create) | **POST** /v3/alipay/open/public/payee/bind/create | 添加收款账号接口
[**delete()**](AlipayOpenPublicPayeeBindApi.md#delete) | **DELETE** /v3/alipay/open/public/payee/bind/delete | 解绑收款账号接口


## `create()`

```php
create($alipayOpenPublicPayeeBindCreateModel): object
```

添加收款账号接口

允许开发者调用该接口将收款账号与当前生活号绑定，从而支持支付成功页引导推荐关注生活号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicPayeeBindApi(
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

$alipayOpenPublicPayeeBindCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicPayeeBindCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicPayeeBindCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicPayeeBindCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicPayeeBindApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicPayeeBindCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicPayeeBindCreateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($loginId, $pid): object
```

解绑收款账号接口

允许开发者调用该接口将收款账号与当前生活号解绑

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicPayeeBindApi(
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

$loginId = 13434232322; // string | 收款账号，需要绑定的收款支付宝账号，请勿与 pid 同时传入。
$pid = 208844738438439; // string | 支付宝用户id，2088开头的16位长度字符串，请勿与 login_id 同时传入。

try {
    $result = $apiInstance->delete($loginId, $pid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicPayeeBindApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loginId** | **string**| 收款账号，需要绑定的收款支付宝账号，请勿与 pid 同时传入。 | [optional]
 **pid** | **string**| 支付宝用户id，2088开头的16位长度字符串，请勿与 login_id 同时传入。 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
