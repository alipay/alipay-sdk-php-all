# Alipay\OpenAPISDK\AlipayOpenMiniInnerappPluginApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**order()**](AlipayOpenMiniInnerappPluginApi.md#order) | **POST** /v3/alipay/open/mini/innerapp/plugin/order | 小程序代商户订购插件


## `order()`

```php
order($alipayOpenMiniInnerappPluginOrderModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginOrderResponseModel
```

小程序代商户订购插件

提供给二方场景下，代商家小程序订购、授权与签约插件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginApi(
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

$alipayOpenMiniInnerappPluginOrderModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginOrderModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginOrderModel

try {
    $result = $apiInstance->order($alipayOpenMiniInnerappPluginOrderModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginApi->order: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginOrderModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginOrderModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginOrderResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
