# Alipay\OpenAPISDK\ZolozAuthenticationSmilepayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](ZolozAuthenticationSmilepayApi.md#initialize) | **POST** /v3/zoloz/authentication/smilepay/initialize | 刷脸支付初始化


## `initialize()`

```php
initialize($zolozAuthenticationSmilepayInitializeModel): \Alipay\OpenAPISDK\Model\ZolozAuthenticationSmilepayInitializeResponseModel
```

刷脸支付初始化

通过该接口获取刷脸支付服务的初始化信息，详细字段描述请参考产品说明文档

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZolozAuthenticationSmilepayApi(
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

$zolozAuthenticationSmilepayInitializeModel = new \Alipay\OpenAPISDK\Model\ZolozAuthenticationSmilepayInitializeModel(); // \Alipay\OpenAPISDK\Model\ZolozAuthenticationSmilepayInitializeModel

try {
    $result = $apiInstance->initialize($zolozAuthenticationSmilepayInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZolozAuthenticationSmilepayApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zolozAuthenticationSmilepayInitializeModel** | **\Alipay\OpenAPISDK\Model\ZolozAuthenticationSmilepayInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZolozAuthenticationSmilepayInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
