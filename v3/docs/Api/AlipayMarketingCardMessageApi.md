# Alipay\OpenAPISDK\AlipayMarketingCardMessageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notify()**](AlipayMarketingCardMessageApi.md#notify) | **POST** /v3/alipay/marketing/card/message/notify | 会员卡消息通知


## `notify()`

```php
notify($alipayMarketingCardMessageNotifyModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardMessageNotifyResponseModel
```

会员卡消息通知

商户触发消息通知用户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardMessageApi(
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

$alipayMarketingCardMessageNotifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardMessageNotifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardMessageNotifyModel

try {
    $result = $apiInstance->notify($alipayMarketingCardMessageNotifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardMessageApi->notify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardMessageNotifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardMessageNotifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardMessageNotifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
