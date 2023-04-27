# Alipay\OpenAPISDK\AlipayFundAuthOrderAppApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**freeze()**](AlipayFundAuthOrderAppApi.md#freeze) | **POST** /v3/alipay/fund/auth/order/app/freeze | 线上资金授权冻结接口


## `freeze()`

```php
freeze($alipayFundAuthOrderAppFreezeModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderAppFreezeResponseModel
```

线上资金授权冻结接口

创建支付宝授权订单并完成资金冻结。适用于线上场景完成资金授权, 例如从商户APP端拉起支付宝收银台完成冻结。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOrderAppApi(
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

$alipayFundAuthOrderAppFreezeModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderAppFreezeModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderAppFreezeModel

try {
    $result = $apiInstance->freeze($alipayFundAuthOrderAppFreezeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOrderAppApi->freeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOrderAppFreezeModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderAppFreezeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderAppFreezeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
