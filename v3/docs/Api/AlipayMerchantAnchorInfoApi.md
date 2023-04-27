# Alipay\OpenAPISDK\AlipayMerchantAnchorInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMerchantAnchorInfoApi.md#query) | **GET** /v3/alipay/merchant/anchor/query | 查询主播信息


## `query()`

```php
query($userId, $openId, $publicId): \Alipay\OpenAPISDK\Model\AlipayMerchantAnchorInfoQueryResponseModel
```

查询主播信息

查询主播信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantAnchorInfoApi(
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

$userId = 2088000011112222; // string | 蚂蚁统一会员ID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 蚂蚁统一会员ID
$publicId = 2021000011112222; // string | 生活号ID

try {
    $result = $apiInstance->query($userId, $openId, $publicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantAnchorInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 蚂蚁统一会员ID | [optional]
 **openId** | **string**| 蚂蚁统一会员ID | [optional]
 **publicId** | **string**| 生活号ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantAnchorInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
