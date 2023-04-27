# Alipay\OpenAPISDK\ZhimaCreditPeZmgoBizoptApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**close()**](ZhimaCreditPeZmgoBizoptApi.md#close) | **POST** /v3/zhima/credit/pe/zmgo/bizopt/close | 芝麻GO签约关单


## `close()`

```php
close($zhimaCreditPeZmgoBizoptCloseModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoBizoptCloseResponseModel
```

芝麻GO签约关单

签约芝麻GO时，在签约申请时会生初始状态的签约单，如果后续不进行签约确认，可通过此接口关闭签约单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoBizoptApi(
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

$zhimaCreditPeZmgoBizoptCloseModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoBizoptCloseModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoBizoptCloseModel

try {
    $result = $apiInstance->close($zhimaCreditPeZmgoBizoptCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoBizoptApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoBizoptCloseModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoBizoptCloseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoBizoptCloseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
