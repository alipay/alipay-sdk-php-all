# Alipay\OpenAPISDK\AlipayMarketingCampaignOrderVoucherApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](AlipayMarketingCampaignOrderVoucherApi.md#consult) | **POST** /v3/alipay/marketing/campaign/order/voucher/consult | 订单优惠前置咨询


## `consult()`

```php
consult($authToken, $alipayMarketingCampaignOrderVoucherConsultModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignOrderVoucherConsultResponseModel
```

订单优惠前置咨询

本接口用于前置优惠咨询，包括本订单可享的优惠券列表，注意该列表并不等价于最终核销时使用的券列表，而是包含了咨询的那一刻该订单能用的所有券，且券满足叠加使用下的互斥等规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignOrderVoucherApi(
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
$alipayMarketingCampaignOrderVoucherConsultModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignOrderVoucherConsultModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignOrderVoucherConsultModel

try {
    $result = $apiInstance->consult($authToken, $alipayMarketingCampaignOrderVoucherConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignOrderVoucherApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayMarketingCampaignOrderVoucherConsultModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignOrderVoucherConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignOrderVoucherConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
