# Alipay\OpenAPISDK\AntMerchantExpandMccApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AntMerchantExpandMccApi.md#query) | **GET** /v3/ant/merchant/mcc/query | 商户mcc信息查询


## `query()`

```php
query($mccCodeList): \Alipay\OpenAPISDK\Model\AntMerchantExpandMccQueryResponseModel
```

商户mcc信息查询

用于查询商户的新版本mcc行业信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandMccApi(
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

$mccCodeList = B0001,B0002; // string | 传入需要查询的code列表，以分号分隔；注：如果需要查询完整类目树，可以传入ROOT

try {
    $result = $apiInstance->query($mccCodeList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandMccApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mccCodeList** | **string**| 传入需要查询的code列表，以分号分隔；注：如果需要查询完整类目树，可以传入ROOT | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandMccQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
