# Alipay\OpenAPISDK\AlipaySystemOauthApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**token()**](AlipaySystemOauthApi.md#token) | **POST** /v3/alipay/system/oauth/token | 换取授权访问令牌


## `token()`

```php
token($alipaySystemOauthTokenModel): \Alipay\OpenAPISDK\Model\AlipaySystemOauthTokenResponseModel
```

换取授权访问令牌

换取授权访问令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySystemOauthApi(
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

$alipaySystemOauthTokenModel = new \Alipay\OpenAPISDK\Model\AlipaySystemOauthTokenModel(); // \Alipay\OpenAPISDK\Model\AlipaySystemOauthTokenModel

try {
    $result = $apiInstance->token($alipaySystemOauthTokenModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySystemOauthApi->token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipaySystemOauthTokenModel** | **\Alipay\OpenAPISDK\Model\AlipaySystemOauthTokenModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipaySystemOauthTokenResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
