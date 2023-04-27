# Alipay\OpenAPISDK\AntMerchantExpandInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AntMerchantExpandInfoApi.md#query) | **GET** /v3/ant/merchant/expand/info/query | 蚂蚁商户信息查询接口


## `query()`

```php
query($merchantNo): \Alipay\OpenAPISDK\Model\AntMerchantExpandInfoQueryResponseModel
```

蚂蚁商户信息查询接口

提供商户号查询商户基础信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandInfoApi(
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

$merchantNo = 2088123456788765; // string | 商户号，目前是商户pid

try {
    $result = $apiInstance->query($merchantNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户号，目前是商户pid | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
