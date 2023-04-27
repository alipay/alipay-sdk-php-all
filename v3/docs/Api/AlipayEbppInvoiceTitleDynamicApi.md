# Alipay\OpenAPISDK\AlipayEbppInvoiceTitleDynamicApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**get()**](AlipayEbppInvoiceTitleDynamicApi.md#get) | **GET** /v3/alipay/ebpp/invoice/title/dynamic/get | 根据动态码查询发票抬头


## `get()`

```php
get($barCode): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceTitleDynamicGetResponseModel
```

根据动态码查询发票抬头

支付宝钱包内的发票管家app在用户抬头展示页面会显示对应该抬头的动态条形码，通过本接口，可根据条形码中数字串获取对应的用户抬头信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceTitleDynamicApi(
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

$barCode = 82771888; // string | 抬头动态码

try {
    $result = $apiInstance->get($barCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceTitleDynamicApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barCode** | **string**| 抬头动态码 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceTitleDynamicGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
