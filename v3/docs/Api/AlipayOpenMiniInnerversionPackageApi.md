# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionPackageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenMiniInnerversionPackageApi.md#create) | **POST** /v3/alipay/open/mini/innerversion/package/create | 单独构建包信息


## `create()`

```php
create($alipayOpenMiniInnerversionPackageCreateModel): object
```

单独构建包信息

内部OPENAPI 单独构建包信息。将构建链路中打预发包逻辑抽离出来，成为单独的能力，让伙伴等业务自己来调用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionPackageApi(
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

$alipayOpenMiniInnerversionPackageCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionPackageCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionPackageCreateModel

try {
    $result = $apiInstance->create($alipayOpenMiniInnerversionPackageCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionPackageApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionPackageCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionPackageCreateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
