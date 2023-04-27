# Alipay\OpenAPISDK\AlipayOpenAuthTokenApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**app()**](AlipayOpenAuthTokenApi.md#app) | **POST** /v3/alipay/open/auth/token/app | 换取应用授权令牌


## `app()`

```php
app($alipayOpenAuthTokenAppModel): \Alipay\OpenAPISDK\Model\AlipayOpenAuthTokenAppResponseModel
```

换取应用授权令牌

换取应用授权令牌。在应用授权的场景下，商户把名下应用授权给ISV后，支付宝会给ISV颁发应用授权码app_auth_code，ISV可通过获取到的app_auth_code换取app_auth_token。app_auth_code作为换取app_auth_token的票据，每次用户授权带上的app_auth_code将不一样，app_auth_code只能使用一次，一天（从当前时间算起的24小时）未被使用自动过期。  刷新应用授权令牌，ISV可通过获取到的refresh_token刷新app_auth_token，刷新后老的refresh_token会在一段时间后失效（失效时间为接口返回的re_expires_in）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAuthTokenApi(
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

$alipayOpenAuthTokenAppModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAuthTokenAppModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAuthTokenAppModel

try {
    $result = $apiInstance->app($alipayOpenAuthTokenAppModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAuthTokenApi->app: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAuthTokenAppModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAuthTokenAppModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAuthTokenAppResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
