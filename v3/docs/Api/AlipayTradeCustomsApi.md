# Alipay\OpenAPISDK\AlipayTradeCustomsApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**callDeclare()**](AlipayTradeCustomsApi.md#callDeclare) | **POST** /v3/alipay/trade/customs/declare | 统一收单报关接口
[**query()**](AlipayTradeCustomsApi.md#query) | **GET** /v3/alipay/trade/customs/query | 查询报关详细信息


## `callDeclare()`

```php
callDeclare($alipayTradeCustomsDeclareModel): \Alipay\OpenAPISDK\Model\AlipayTradeCustomsDeclareResponseModel
```

统一收单报关接口

境外商户的商品进口到国内时需要向海关中心报送支付、物流等信息，由海关审核，如果交易是由支付宝支付的话，需要商户可以调用此报关接口来请求支付宝将其指定交易报送支付单给海关。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeCustomsApi(
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

$alipayTradeCustomsDeclareModel = new \Alipay\OpenAPISDK\Model\AlipayTradeCustomsDeclareModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeCustomsDeclareModel

try {
    $result = $apiInstance->callDeclare($alipayTradeCustomsDeclareModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeCustomsApi->callDeclare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeCustomsDeclareModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeCustomsDeclareModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeCustomsDeclareResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($outRequestNos): \Alipay\OpenAPISDK\Model\AlipayTradeCustomsQueryResponseModel
```

查询报关详细信息

境外商户的商品进口到国内时需要向海关中心报送支付、物流等信息，由海关审核，如果交易是由支付宝支付的话，需要商户调用支付宝报关接口来请求支付宝将其指定交易报送支付单给海关。商户可以通过该接口主动查询报关状态，了解报关详情以及进度。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeCustomsApi(
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

$outRequestNos = 201506010001,201506010002,201506010003; // string | 报关请求号。需要查询的商户端报关请求号，支持批量查询，  多个值用英文半角逗号分隔，单次请求最多10个;

try {
    $result = $apiInstance->query($outRequestNos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeCustomsApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outRequestNos** | **string**| 报关请求号。需要查询的商户端报关请求号，支持批量查询，  多个值用英文半角逗号分隔，单次请求最多10个; | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeCustomsQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
