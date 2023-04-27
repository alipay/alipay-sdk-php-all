# Alipay\OpenAPISDK\AliosOpenAutoInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AliosOpenAutoInfoApi.md#query) | **GET** /v3/alios/open/auto/info/query | 查询阿里车的车辆信息


## `query()`

```php
query($authToken, $userId, $openId, $deviceToken): \Alipay\OpenAPISDK\Model\AliosOpenAutoInfoQueryResponseModel
```

查询阿里车的车辆信息

用户授权商户可获取用户的车辆信息后商户可通过openapi获取车辆信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AliosOpenAutoInfoApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$userId = 33424562; // string | 蚂蚁统一会员ID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 经度
$deviceToken = cn-shanghai.e81fe6ffe0214049be4da405b3e78849; // string | 设备token

try {
    $result = $apiInstance->query($authToken, $userId, $openId, $deviceToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliosOpenAutoInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **userId** | **string**| 蚂蚁统一会员ID | [optional]
 **openId** | **string**| 经度 | [optional]
 **deviceToken** | **string**| 设备token | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AliosOpenAutoInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
