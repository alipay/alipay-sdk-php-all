# Alipay\OpenAPISDK\AlipayOpenSpOpporDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSpOpporDetailApi.md#query) | **GET** /v3/alipay/open/sp/oppor/detail/query | 商机作业详情查询


## `query()`

```php
query($isvPid, $opporId): \Alipay\OpenAPISDK\Model\AlipayOpenSpOpporDetailQueryResponseModel
```

商机作业详情查询

商机作业详情查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpOpporDetailApi(
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

$isvPid = 2088501013445414; // string | 服务商pid
$opporId = 2022041403518351; // string | 商机作业Id

try {
    $result = $apiInstance->query($isvPid, $opporId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpOpporDetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isvPid** | **string**| 服务商pid | [optional]
 **opporId** | **string**| 商机作业Id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpOpporDetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
