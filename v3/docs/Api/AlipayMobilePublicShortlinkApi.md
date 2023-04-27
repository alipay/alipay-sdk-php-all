# Alipay\OpenAPISDK\AlipayMobilePublicShortlinkApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayMobilePublicShortlinkApi.md#create) | **POST** /v3/alipay/mobile/public/shortlink/create | 服务窗短链自主生成接口


## `create()`

```php
create($alipayMobilePublicShortlinkCreateModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicShortlinkCreateResponseModel
```

服务窗短链自主生成接口

商户通过本接口生成带自有场景标识的短链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicShortlinkApi(
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

$alipayMobilePublicShortlinkCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicShortlinkCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicShortlinkCreateModel

try {
    $result = $apiInstance->create($alipayMobilePublicShortlinkCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicShortlinkApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicShortlinkCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicShortlinkCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicShortlinkCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
