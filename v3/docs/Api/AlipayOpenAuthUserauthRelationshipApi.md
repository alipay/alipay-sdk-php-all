# Alipay\OpenAPISDK\AlipayOpenAuthUserauthRelationshipApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAuthUserauthRelationshipApi.md#query) | **GET** /v3/alipay/open/auth/userauth/relationship/query | 用户授权关系查询


## `query()`

```php
query($userId, $openId, $scopes): \Alipay\OpenAPISDK\Model\AlipayOpenAuthUserauthRelationshipQueryResponseModel
```

用户授权关系查询

校验本应用和用户的授权关系有效性

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAuthUserauthRelationshipApi(
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

$userId = 2088123443211234; // string | 蚂蚁统一会员ID，如果未开启openid改造，则此值必传
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 蚂蚁统一会员ID，蚂蚁统一会员ID，如果已完成openid改造，则此值必传
$scopes = auth_user,auth_zhima; // string | 查询授权关系所关联的scope，半角逗号分隔的列表，且不允许有重复值

try {
    $result = $apiInstance->query($userId, $openId, $scopes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAuthUserauthRelationshipApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 蚂蚁统一会员ID，如果未开启openid改造，则此值必传 | [optional]
 **openId** | **string**| 蚂蚁统一会员ID，蚂蚁统一会员ID，如果已完成openid改造，则此值必传 | [optional]
 **scopes** | **string**| 查询授权关系所关联的scope，半角逗号分隔的列表，且不允许有重复值 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAuthUserauthRelationshipQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
