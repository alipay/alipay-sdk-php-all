# Alipay\OpenAPISDK\AlipayUserAgreementPermissionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayUserAgreementPermissionApi.md#create) | **POST** /v3/alipay/user/agreement/permission/create | 支付宝协议支付许可创建、服务变更接口


## `create()`

```php
create($alipayUserAgreementPermissionCreateModel): \Alipay\OpenAPISDK\Model\AlipayUserAgreementPermissionCreateResponseModel
```

支付宝协议支付许可创建、服务变更接口

支付宝协议支付许可创建接口、服务变更发送消息提醒接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementPermissionApi(
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

$alipayUserAgreementPermissionCreateModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementPermissionCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementPermissionCreateModel

try {
    $result = $apiInstance->create($alipayUserAgreementPermissionCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementPermissionApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementPermissionCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementPermissionCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementPermissionCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
