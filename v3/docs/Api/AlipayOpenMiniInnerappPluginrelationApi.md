# Alipay\OpenAPISDK\AlipayOpenMiniInnerappPluginrelationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniInnerappPluginrelationApi.md#query) | **POST** /v3/alipay/open/mini/innerapp/pluginrelation/query | 查询插件引用关系


## `query()`

```php
query($alipayOpenMiniInnerappPluginrelationQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginrelationQueryResponseModel
```

查询插件引用关系

查询插件引用关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginrelationApi(
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

$alipayOpenMiniInnerappPluginrelationQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginrelationQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginrelationQueryModel

try {
    $result = $apiInstance->query($alipayOpenMiniInnerappPluginrelationQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginrelationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginrelationQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginrelationQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginrelationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
