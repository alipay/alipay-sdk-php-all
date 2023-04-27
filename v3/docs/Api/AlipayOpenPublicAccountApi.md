# Alipay\OpenAPISDK\AlipayOpenPublicAccountApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenPublicAccountApi.md#create) | **POST** /v3/alipay/open/public/account/create | 添加绑定商户会员号
[**delete()**](AlipayOpenPublicAccountApi.md#delete) | **DELETE** /v3/alipay/open/public/account/delete | 解除绑定商户会员号
[**query()**](AlipayOpenPublicAccountApi.md#query) | **GET** /v3/alipay/open/public/account/query | 查询绑定商户会员号
[**reset()**](AlipayOpenPublicAccountApi.md#reset) | **POST** /v3/alipay/open/public/account/reset | 重新设置绑定商家会员号


## `create()`

```php
create($alipayOpenPublicAccountCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountCreateResponseModel
```

添加绑定商户会员号

当用户成为商户的关注用户后，可以在商户的服务窗中点击“添加绑定商户会员号”功能，支付宝系统收到操作请求后将该动作通知给商户（使用用户发送信息到商户接口，其中eventType（事件类型）为click，actionParam（按钮标识）为authentication），商户根据此通知调用商户回复消息接口（其中须包含Url链接地址），支付宝收到商户的回复消息中的链接地址后，自动跳转至商户平台的上商户会员绑定界面中，让用户完成账户绑定。 当用户有效完成账户绑定后，商户调用本接口，把绑定结果数据通知给支付宝。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicAccountApi(
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

$alipayOpenPublicAccountCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicAccountCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicAccountApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicAccountCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($agreementId, $bindAccountNo, $fromUserId, $openId): object
```

解除绑定商户会员号

在支付宝服务窗中目前一共有三种解除绑定商户会员号的场景，具体如下：  用户取消关注服务窗  用户在服务窗内手动执行解除绑定操作  开发者调用解除绑定商户会员号接口解除绑定

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicAccountApi(
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

$agreementId = 29022222; // string | 协议号，商户会员在支付宝服务窗账号中的唯一标识，与bind_account_no不能同时为空
$bindAccountNo = test001; // string | 绑定帐号，建议在开发者的系统中保持唯一性，与agreement_id不能同时为空
$fromUserId = 2088656734541243; // string | 绑定用户的支付宝userid，2088开头16位长度的字符串，与agreementId不能同时为空
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户的唯一标识

try {
    $result = $apiInstance->delete($agreementId, $bindAccountNo, $fromUserId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicAccountApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementId** | **string**| 协议号，商户会员在支付宝服务窗账号中的唯一标识，与bind_account_no不能同时为空 | [optional]
 **bindAccountNo** | **string**| 绑定帐号，建议在开发者的系统中保持唯一性，与agreement_id不能同时为空 | [optional]
 **fromUserId** | **string**| 绑定用户的支付宝userid，2088开头16位长度的字符串，与agreementId不能同时为空 | [optional]
 **openId** | **string**| 支付宝用户的唯一标识 | [optional]

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
query($userId, $openId): \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountQueryResponseModel
```

查询绑定商户会员号

当用户成为商户的关注用户之后，则商户可以通过本接口查询关注者的绑定账户，以便补全异常情况下的单边账户数据。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicAccountApi(
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

$userId = 2088123412341234; // string | 用户的支付宝用户号，2088开头。
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户的唯一标识

try {
    $result = $apiInstance->query($userId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicAccountApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 用户的支付宝用户号，2088开头。 | [optional]
 **openId** | **string**| 支付宝用户的唯一标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `reset()`

```php
reset($alipayOpenPublicAccountResetModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountResetResponseModel
```

重新设置绑定商家会员号

如果商户想要重置已经添加的外部账户，可以通过该接口完成。重置后，原有的外部户将删除，新的外部户添加进去。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicAccountApi(
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

$alipayOpenPublicAccountResetModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountResetModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountResetModel

try {
    $result = $apiInstance->reset($alipayOpenPublicAccountResetModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicAccountApi->reset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicAccountResetModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountResetModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicAccountResetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
