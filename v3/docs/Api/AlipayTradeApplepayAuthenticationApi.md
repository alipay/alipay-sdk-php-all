# Alipay\OpenAPISDK\AlipayTradeApplepayAuthenticationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submit()**](AlipayTradeApplepayAuthenticationApi.md#submit) | **POST** /v3/alipay/trade/applepay/authentication/submit | ApplePay支付鉴权提交


## `submit()`

```php
submit($alipayTradeApplepayAuthenticationSubmitModel): \Alipay\OpenAPISDK\Model\AlipayTradeApplepayAuthenticationSubmitResponseModel
```

ApplePay支付鉴权提交

ApplePay定义的接口，支付宝进行适配。ApplePay端支付核身完毕后，提交到支付宝进行核身验证+支付推进。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeApplepayAuthenticationApi(
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

$alipayTradeApplepayAuthenticationSubmitModel = new \Alipay\OpenAPISDK\Model\AlipayTradeApplepayAuthenticationSubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeApplepayAuthenticationSubmitModel

try {
    $result = $apiInstance->submit($alipayTradeApplepayAuthenticationSubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeApplepayAuthenticationApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeApplepayAuthenticationSubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeApplepayAuthenticationSubmitModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeApplepayAuthenticationSubmitResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
