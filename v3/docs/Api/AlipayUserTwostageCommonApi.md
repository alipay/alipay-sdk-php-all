# Alipay\OpenAPISDK\AlipayUserTwostageCommonApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**callUse()**](AlipayUserTwostageCommonApi.md#callUse) | **POST** /v3/alipay/user/twostage/common/use | 通用当面付二阶段接口


## `callUse()`

```php
callUse($alipayUserTwostageCommonUseModel): \Alipay\OpenAPISDK\Model\AlipayUserTwostageCommonUseResponseModel
```

通用当面付二阶段接口

商家通过小程序/卡券开放权益(优惠券)，用户在小程序/卡券授权后，打开付款码时通过该接口获取用户信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserTwostageCommonApi(
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

$alipayUserTwostageCommonUseModel = new \Alipay\OpenAPISDK\Model\AlipayUserTwostageCommonUseModel(); // \Alipay\OpenAPISDK\Model\AlipayUserTwostageCommonUseModel

try {
    $result = $apiInstance->callUse($alipayUserTwostageCommonUseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserTwostageCommonApi->callUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserTwostageCommonUseModel** | **\Alipay\OpenAPISDK\Model\AlipayUserTwostageCommonUseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserTwostageCommonUseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
