# Alipay\OpenAPISDK\AlipayMobilePublicTemplateMessageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete()**](AlipayMobilePublicTemplateMessageApi.md#delete) | **POST** /v3/alipay/mobile/public/template/message/delete | 模板消息删除接口
[**get()**](AlipayMobilePublicTemplateMessageApi.md#get) | **GET** /v3/alipay/mobile/public/template/message/get | 模板消息领取接口
[**query()**](AlipayMobilePublicTemplateMessageApi.md#query) | **POST** /v3/alipay/mobile/public/template/message/query | 模板消息查询接口


## `delete()`

```php
delete($alipayMobilePublicTemplateMessageDeleteModel): object
```

模板消息删除接口

模板消息删除接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicTemplateMessageApi(
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

$alipayMobilePublicTemplateMessageDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageDeleteModel

try {
    $result = $apiInstance->delete($alipayMobilePublicTemplateMessageDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicTemplateMessageApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicTemplateMessageDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageDeleteModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `get()`

```php
get($templateId): \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageGetResponseModel
```

模板消息领取接口

帮助服务窗从服务窗平台（fuwu.alipay.com）公共模板库里领取一个行业的消息模板--消息模板是一种消息的样式，如消费提醒、账单提醒等

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicTemplateMessageApi(
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

$templateId = TM000000223; // string | 消息母板id

try {
    $result = $apiInstance->get($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicTemplateMessageApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 消息母板id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($authToken, $alipayMobilePublicTemplateMessageQueryModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageQueryResponseModel
```

模板消息查询接口

模板消息查询接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicTemplateMessageApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$alipayMobilePublicTemplateMessageQueryModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageQueryModel

try {
    $result = $apiInstance->query($authToken, $alipayMobilePublicTemplateMessageQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicTemplateMessageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayMobilePublicTemplateMessageQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicTemplateMessageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
