# Alipay\OpenAPISDK\AlipayEbppPdeductBillPayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**status()**](AlipayEbppPdeductBillPayApi.md#status) | **GET** /v3/alipay/ebpp/pdeduct/bill/pay/status | 缴费直连代扣订单支付状态查询


## `status()`

```php
status($agreementId, $openId, $outOrderNo): \Alipay\OpenAPISDK\Model\AlipayEbppPdeductBillPayStatusResponseModel
```

缴费直连代扣订单支付状态查询

缴费直连代扣

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductBillPayApi(
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

$agreementId = 2088123123421312; // string | 支付宝用户ID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 用户UserId在应用AppId下的唯一用户标识
$outOrderNo = 12312313; // string | 商户代扣业务流水

try {
    $result = $apiInstance->status($agreementId, $openId, $outOrderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductBillPayApi->status: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementId** | **string**| 支付宝用户ID | [optional]
 **openId** | **string**| 用户UserId在应用AppId下的唯一用户标识 | [optional]
 **outOrderNo** | **string**| 商户代扣业务流水 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppPdeductBillPayStatusResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
