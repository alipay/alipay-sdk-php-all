# Alipay\OpenAPISDK\AlipaySecurityDataSssApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipaySecurityDataSssApi.md#create) | **POST** /v3/alipay/security/data/sss/create/{a} | 文档回归测试勿动openapi_openid_post多场景


## `create()`

```php
create($a, $b, $bOpenId, $alipaySecurityDataSssCreateModel): \Alipay\OpenAPISDK\Model\AlipaySecurityDataSssCreateResponseModel
```

文档回归测试勿动openapi_openid_post多场景

文档回归测试勿动openapi_openid_post多场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySecurityDataSssApi(
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

$a = 1; // int | path.数字，无枚举，有注意事项
$b = 12; // string | 有枚举，必须，有openid，有注意事项
$bOpenId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 有枚举，必须，有openid，有注意事项
$alipaySecurityDataSssCreateModel = new \Alipay\OpenAPISDK\Model\AlipaySecurityDataSssCreateModel(); // \Alipay\OpenAPISDK\Model\AlipaySecurityDataSssCreateModel

try {
    $result = $apiInstance->create($a, $b, $bOpenId, $alipaySecurityDataSssCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySecurityDataSssApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | **int**| path.数字，无枚举，有注意事项 |
 **b** | **string**| 有枚举，必须，有openid，有注意事项 | [optional]
 **bOpenId** | **string**| 有枚举，必须，有openid，有注意事项 | [optional]
 **alipaySecurityDataSssCreateModel** | **\Alipay\OpenAPISDK\Model\AlipaySecurityDataSssCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipaySecurityDataSssCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
