# Alipay\OpenAPISDK\AlipayCommerceLogisticsOrderIstdcancelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**preconsult()**](AlipayCommerceLogisticsOrderIstdcancelApi.md#preconsult) | **POST** /v3/alipay/commerce/logistics/order/istdcancel/preconsult | 预取消即时配送订单


## `preconsult()`

```php
preconsult($alipayCommerceLogisticsOrderIstdcancelPreconsultModel): \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderIstdcancelPreconsultResponseModel
```

预取消即时配送订单

预取消即时配送订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceLogisticsOrderIstdcancelApi(
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

$alipayCommerceLogisticsOrderIstdcancelPreconsultModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderIstdcancelPreconsultModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderIstdcancelPreconsultModel

try {
    $result = $apiInstance->preconsult($alipayCommerceLogisticsOrderIstdcancelPreconsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceLogisticsOrderIstdcancelApi->preconsult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceLogisticsOrderIstdcancelPreconsultModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderIstdcancelPreconsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceLogisticsOrderIstdcancelPreconsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
