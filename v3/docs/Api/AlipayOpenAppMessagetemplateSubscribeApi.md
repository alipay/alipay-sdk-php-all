# Alipay\OpenAPISDK\AlipayOpenAppMessagetemplateSubscribeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAppMessagetemplateSubscribeApi.md#query) | **POST** /v3/alipay/open/app/messagetemplate/subscribe/query | 模板订阅关系查询


## `query()`

```php
query($alipayOpenAppMessagetemplateSubscribeQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenAppMessagetemplateSubscribeQueryResponseModel
```

模板订阅关系查询

商户使用该接口可以查询用户对其消息模板的订阅关系，可以根据是否订阅引导用户进行订阅和精准触达消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppMessagetemplateSubscribeApi(
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

$alipayOpenAppMessagetemplateSubscribeQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAppMessagetemplateSubscribeQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAppMessagetemplateSubscribeQueryModel

try {
    $result = $apiInstance->query($alipayOpenAppMessagetemplateSubscribeQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppMessagetemplateSubscribeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAppMessagetemplateSubscribeQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAppMessagetemplateSubscribeQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppMessagetemplateSubscribeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
