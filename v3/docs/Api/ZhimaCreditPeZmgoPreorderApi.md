# Alipay\OpenAPISDK\ZhimaCreditPeZmgoPreorderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](ZhimaCreditPeZmgoPreorderApi.md#create) | **PUT** /v3/zhima/credit/pe/zmgo/preorder/create | 芝麻GO签约预创单


## `create()`

```php
create($zhimaCreditPeZmgoPreorderCreateModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoPreorderCreateResponseModel
```

芝麻GO签约预创单

芝麻GO签约三件套前预创建单据，预传入签约基本参数和自定义配置，并支持动态模板配置能力。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoPreorderApi(
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

$zhimaCreditPeZmgoPreorderCreateModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoPreorderCreateModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoPreorderCreateModel

try {
    $result = $apiInstance->create($zhimaCreditPeZmgoPreorderCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoPreorderApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoPreorderCreateModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoPreorderCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoPreorderCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
