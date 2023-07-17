# Alipay\OpenAPISDK\AlipayOpenOperationOpenbizmockTestpathkeyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenOperationOpenbizmockTestpathkeyApi.md#query) | **POST** /v3/alipay/open/operation/openbizmock/testpathkey/query/{keykey}/{a} | 测试网关协议3.0key和path


## `query()`

```php
query($keykey, $a, $b, $c, $data, $f): \Alipay\OpenAPISDK\Model\AlipayOpenOperationOpenbizmockTestpathkeyQueryResponseModel
```

测试网关协议3.0key和path

测试网关协议3.0key和path

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenOperationOpenbizmockTestpathkeyApi(
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

$keykey = keykey; // string | ceshi
$a = a; // string | 测试
$b = b; // string | ceshi
$c = c; // string | 测试
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenOperationOpenbizmockTestpathkeyQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenOperationOpenbizmockTestpathkeyQueryModel
$f = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->query($keykey, $a, $b, $c, $data, $f);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenOperationOpenbizmockTestpathkeyApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keykey** | **string**| ceshi |
 **a** | **string**| 测试 |
 **b** | **string**| ceshi | [optional]
 **c** | **string**| 测试 | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenOperationOpenbizmockTestpathkeyQueryModel**|  | [optional]
 **f** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenOperationOpenbizmockTestpathkeyQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
