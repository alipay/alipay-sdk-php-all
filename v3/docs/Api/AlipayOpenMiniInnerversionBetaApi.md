# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionBetaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirm()**](AlipayOpenMiniInnerversionBetaApi.md#confirm) | **POST** /v3/alipay/open/mini/innerversion/beta/confirm | 确认邀测结果


## `confirm()`

```php
confirm($alipayOpenMiniInnerversionBetaConfirmModel): object
```

确认邀测结果

小程序确认邀测结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionBetaApi(
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

$alipayOpenMiniInnerversionBetaConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBetaConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBetaConfirmModel

try {
    $result = $apiInstance->confirm($alipayOpenMiniInnerversionBetaConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionBetaApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionBetaConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionBetaConfirmModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
