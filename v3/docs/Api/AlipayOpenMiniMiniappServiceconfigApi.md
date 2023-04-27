# Alipay\OpenAPISDK\AlipayOpenMiniMiniappServiceconfigApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenMiniMiniappServiceconfigApi.md#modify) | **POST** /v3/alipay/open/mini/miniapp/serviceconfig/modify | 小程序设置客服方式


## `modify()`

```php
modify($alipayOpenMiniMiniappServiceconfigModifyModel): object
```

小程序设置客服方式

小程序设置客服方式

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniMiniappServiceconfigApi(
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

$alipayOpenMiniMiniappServiceconfigModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniMiniappServiceconfigModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniMiniappServiceconfigModifyModel

try {
    $result = $apiInstance->modify($alipayOpenMiniMiniappServiceconfigModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniMiniappServiceconfigApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniMiniappServiceconfigModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniMiniappServiceconfigModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
