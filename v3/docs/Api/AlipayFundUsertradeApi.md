# Alipay\OpenAPISDK\AlipayFundUsertradeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayFundUsertradeApi.md#batchquery) | **POST** /v3/alipay/fund/usertrade/batchquery | 用户交易数据查询


## `batchquery()`

```php
batchquery($authToken, $alipayFundUsertradeBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayFundUsertradeBatchqueryResponseModel
```

用户交易数据查询

资金团队会监听指定门店相关的用户交易数据，并且，在用户授权后，开放该接口给到外部调用，查询用户近期内的交易数据。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundUsertradeApi(
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
$alipayFundUsertradeBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayFundUsertradeBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayFundUsertradeBatchqueryModel

try {
    $result = $apiInstance->batchquery($authToken, $alipayFundUsertradeBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundUsertradeApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayFundUsertradeBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayFundUsertradeBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundUsertradeBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
