# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionBuildauditApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submit()**](AlipayOpenMiniInnerversionBuildauditApi.md#submit) | **POST** /v3/alipay/open/mini/innerversion/buildaudit/submit | 内部链路小程序构建并提审


## `submit()`

```php
submit($alipayOpenMiniInnerversionBuildauditSubmitModel): object
```

内部链路小程序构建并提审

内部链路小程序构建并提审

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionBuildauditApi(
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

$alipayOpenMiniInnerversionBuildauditSubmitModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBuildauditSubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBuildauditSubmitModel

try {
    $result = $apiInstance->submit($alipayOpenMiniInnerversionBuildauditSubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionBuildauditApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionBuildauditSubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBuildauditSubmitModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
