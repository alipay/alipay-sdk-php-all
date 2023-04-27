# Alipay\OpenAPISDK\AlipayOpenPublicUserFollowApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenPublicUserFollowApi.md#query) | **GET** /v3/alipay/open/public/user/follow/query | 查询用户是否已经关注了生活号


## `query()`

```php
query($userId, $openId): \Alipay\OpenAPISDK\Model\AlipayOpenPublicUserFollowQueryResponseModel
```

查询用户是否已经关注了生活号

查询用户是否已经关注生活号，支持生活号、内容号、财富号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicUserFollowApi(
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

$userId = 2088132324342243; // string | 支付宝用户id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户唯一的标识

try {
    $result = $apiInstance->query($userId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicUserFollowApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 支付宝用户id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **openId** | **string**| 支付宝用户唯一的标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicUserFollowQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
