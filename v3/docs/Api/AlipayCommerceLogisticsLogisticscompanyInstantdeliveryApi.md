# Alipay\OpenAPISDK\AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi.md#query) | **GET** /v3/alipay/commerce/logistics/logisticscompany/instantdelivery/query | 查询支付宝支持的即时配送公司


## `query()`

```php
query(): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsLogisticscompanyInstantdeliveryQueryResponseModel
```

查询支付宝支持的即时配送公司

查询支付宝支持的即时配送公司

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi(
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


try {
    $result = $apiInstance->query();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsLogisticscompanyInstantdeliveryApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsLogisticscompanyInstantdeliveryQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
