# Alipay\OpenAPISDK\AlipayEbppBillApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayEbppBillApi.md#add) | **POST** /v3/alipay/ebpp/bill/add | 创建账单
[**get()**](AlipayEbppBillApi.md#get) | **GET** /v3/alipay/ebpp/bill/get | 查询账单


## `add()`

```php
add($authToken, $alipayEbppBillAddModel): \Alipay\OpenAPISDK\Model\AlipayEbppBillAddResponseModel
```

创建账单

创建账单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppBillApi(
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
$alipayEbppBillAddModel = new \Alipay\OpenAPISDK\Model\AlipayEbppBillAddModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppBillAddModel

try {
    $result = $apiInstance->add($authToken, $alipayEbppBillAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppBillApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayEbppBillAddModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppBillAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppBillAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `get()`

```php
get($authToken, $orderType, $merchantOrderNo): \Alipay\OpenAPISDK\Model\AlipayEbppBillGetResponseModel
```

查询账单

查询账单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppBillApi(
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
$orderType = JF; // string | 支付宝订单类型。公共事业缴纳JF,信用卡还款HK
$merchantOrderNo = 201203031234567; // string | 输出机构的业务流水号，需要保证唯一性。

try {
    $result = $apiInstance->get($authToken, $orderType, $merchantOrderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppBillApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **orderType** | **string**| 支付宝订单类型。公共事业缴纳JF,信用卡还款HK | [optional]
 **merchantOrderNo** | **string**| 输出机构的业务流水号，需要保证唯一性。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppBillGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
