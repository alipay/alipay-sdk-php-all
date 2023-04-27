# Alipay\OpenAPISDK\AlipayOpenPublicLabelUserApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenPublicLabelUserApi.md#query) | **GET** /v3/alipay/open/public/label/user/query | 公众号标签管理-查询用户标签


## `query()`

```php
query($userId, $openId): \Alipay\OpenAPISDK\Model\AlipayOpenPublicLabelUserQueryResponseModel
```

公众号标签管理-查询用户标签

开发者可以使用该接口查询某个用户的所有标签

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLabelUserApi(
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

$userId = 2088283746283746; // string | 支付宝用户的userid，2088开头长度为16位的字符串
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户的唯一标识

try {
    $result = $apiInstance->query($userId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLabelUserApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 支付宝用户的userid，2088开头长度为16位的字符串 | [optional]
 **openId** | **string**| 支付宝用户的唯一标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicLabelUserQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
