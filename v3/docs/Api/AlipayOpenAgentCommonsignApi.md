# Alipay\OpenAPISDK\AlipayOpenAgentCommonsignApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirm()**](AlipayOpenAgentCommonsignApi.md#confirm) | **POST** /v3/alipay/open/agent/commonsign/confirm | 代商户签约，提交信息确认接口


## `confirm()`

```php
confirm($alipayOpenAgentCommonsignConfirmModel): \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonsignConfirmResponseModel
```

代商户签约，提交信息确认接口

三方应用代理签约产品，上传商户信息后，确认提交信息。可以配合开启事务接口使用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentCommonsignApi(
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

$alipayOpenAgentCommonsignConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonsignConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonsignConfirmModel

try {
    $result = $apiInstance->confirm($alipayOpenAgentCommonsignConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentCommonsignApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAgentCommonsignConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonsignConfirmModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonsignConfirmResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
