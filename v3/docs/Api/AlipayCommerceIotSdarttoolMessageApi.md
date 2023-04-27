# Alipay\OpenAPISDK\AlipayCommerceIotSdarttoolMessageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceIotSdarttoolMessageApi.md#query) | **GET** /v3/alipay/commerce/iot/sdarttool/message/query | 消息查询
[**send()**](AlipayCommerceIotSdarttoolMessageApi.md#send) | **POST** /v3/alipay/commerce/iot/sdarttool/message/send | IOT消息服务


## `query()`

```php
query($messageNo): \Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageQueryResponseModel
```

消息查询

isv通过消息id查询消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceIotSdarttoolMessageApi(
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

$messageNo = 201911250000021611; // string | 消息ID

try {
    $result = $apiInstance->query($messageNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceIotSdarttoolMessageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageNo** | **string**| 消息ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `send()`

```php
send($alipayCommerceIotSdarttoolMessageSendModel): \Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageSendResponseModel
```

IOT消息服务

ISV通过此接口向IOT设备推送消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceIotSdarttoolMessageApi(
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

$alipayCommerceIotSdarttoolMessageSendModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageSendModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageSendModel

try {
    $result = $apiInstance->send($alipayCommerceIotSdarttoolMessageSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceIotSdarttoolMessageApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceIotSdarttoolMessageSendModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceIotSdarttoolMessageSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
