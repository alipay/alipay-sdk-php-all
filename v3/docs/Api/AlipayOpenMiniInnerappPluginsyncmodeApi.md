# Alipay\OpenAPISDK\AlipayOpenMiniInnerappPluginsyncmodeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenMiniInnerappPluginsyncmodeApi.md#modify) | **POST** /v3/alipay/open/mini/innerapp/pluginsyncmode/modify | 修改插件继承模式


## `modify()`

```php
modify($alipayOpenMiniInnerappPluginsyncmodeModifyModel): object
```

修改插件继承模式

修改插件继承模式，模板和插件使用关系是否自动继承到宿主小程序上

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappPluginsyncmodeApi(
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

$alipayOpenMiniInnerappPluginsyncmodeModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginsyncmodeModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginsyncmodeModifyModel

try {
    $result = $apiInstance->modify($alipayOpenMiniInnerappPluginsyncmodeModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappPluginsyncmodeApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappPluginsyncmodeModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappPluginsyncmodeModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
