# Alipay\OpenAPISDK\AlipayUserAlipaypointApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayUserAlipaypointApi.md#send) | **POST** /v3/alipay/user/alipaypoint/send | 集分宝发放接口


## `send()`

```php
send($alipayUserAlipaypointSendModel): \Alipay\OpenAPISDK\Model\AlipayUserAlipaypointSendResponseModel
```

集分宝发放接口

用于发放商户采购的集分宝给到支付宝用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAlipaypointApi(
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

$alipayUserAlipaypointSendModel = new \Alipay\OpenAPISDK\Model\AlipayUserAlipaypointSendModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAlipaypointSendModel

try {
    $result = $apiInstance->send($alipayUserAlipaypointSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAlipaypointApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAlipaypointSendModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAlipaypointSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAlipaypointSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
