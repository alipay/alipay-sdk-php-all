# Alipay\OpenAPISDK\AlipayOpenPublicLifeMsgApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**recall()**](AlipayOpenPublicLifeMsgApi.md#recall) | **POST** /v3/alipay/open/public/life/msg/recall | 生活号消息撤回接口
[**send()**](AlipayOpenPublicLifeMsgApi.md#send) | **POST** /v3/alipay/open/public/life/msg/send | 生活号广播消息发送接口


## `recall()`

```php
recall($alipayOpenPublicLifeMsgRecallModel): object
```

生活号消息撤回接口

生活号消息撤回接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeMsgApi(
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

$alipayOpenPublicLifeMsgRecallModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgRecallModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgRecallModel

try {
    $result = $apiInstance->recall($alipayOpenPublicLifeMsgRecallModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeMsgApi->recall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicLifeMsgRecallModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgRecallModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `send()`

```php
send($cover, $data): \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgSendResponseModel
```

生活号广播消息发送接口

媒体资讯生活号群发一篇图文或视频类消息，生活号主页以及客户端首页展示消息详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeMsgApi(
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

$cover = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgSendModel

try {
    $result = $apiInstance->send($cover, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeMsgApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cover** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeMsgSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
