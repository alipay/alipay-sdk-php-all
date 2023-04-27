# Alipay\OpenAPISDK\AlipayOpenAppTestGrayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenAppTestGrayApi.md#create) | **POST** /v3/alipay/open/app/test/gray/create | openapi-oas3.0灰度
[**query()**](AlipayOpenAppTestGrayApi.md#query) | **GET** /v3/alipay/open/app/test/gray/query | GET方法测试


## `create()`

```php
create($a, $oid, $b, $c, $alipayOpenAppTestGrayCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayCreateResponseModel
```

openapi-oas3.0灰度

openapi，oas3.0灰度

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppTestGrayApi(
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

$a = a1; // string | a
$oid = 111; // string | 1
$b = b2; // string | 生
$c = c1; // string | c1
$alipayOpenAppTestGrayCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayCreateModel

try {
    $result = $apiInstance->create($a, $oid, $b, $c, $alipayOpenAppTestGrayCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppTestGrayApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **a** | **string**| a | [optional]
 **oid** | **string**| 1 | [optional]
 **b** | **string**| 生 | [optional]
 **c** | **string**| c1 | [optional]
 **alipayOpenAppTestGrayCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($latitude, $cityId, $uid, $buyOpenId): \Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayQueryResponseModel
```

GET方法测试

oas get

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppTestGrayApi(
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

$latitude = 123; // string | 纬度
$cityId = 1; // string | 1
$uid = 1; // string | 1
$buyOpenId = 1; // string | 1

try {
    $result = $apiInstance->query($latitude, $cityId, $uid, $buyOpenId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppTestGrayApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **string**| 纬度 | [optional]
 **cityId** | **string**| 1 | [optional]
 **uid** | **string**| 1 | [optional]
 **buyOpenId** | **string**| 1 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppTestGrayQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
