# Alipay\OpenAPISDK\AlipaySecurityRiskVerifyidentityMiniappApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirm()**](AlipaySecurityRiskVerifyidentityMiniappApi.md#confirm) | **POST** /v3/alipay/security/risk/verifyidentity/miniapp/confirm | 小程序核验服务结果确认接口


## `confirm()`

```php
confirm($alipaySecurityRiskVerifyidentityMiniappConfirmModel): \Alipay\OpenAPISDK\Model\AlipaySecurityRiskVerifyidentityMiniappConfirmResponseModel
```

小程序核验服务结果确认接口

确认身份核验结果接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySecurityRiskVerifyidentityMiniappApi(
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

$alipaySecurityRiskVerifyidentityMiniappConfirmModel = new \Alipay\OpenAPISDK\Model\AlipaySecurityRiskVerifyidentityMiniappConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipaySecurityRiskVerifyidentityMiniappConfirmModel

try {
    $result = $apiInstance->confirm($alipaySecurityRiskVerifyidentityMiniappConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySecurityRiskVerifyidentityMiniappApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipaySecurityRiskVerifyidentityMiniappConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipaySecurityRiskVerifyidentityMiniappConfirmModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipaySecurityRiskVerifyidentityMiniappConfirmResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
