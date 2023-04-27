# Alipay\OpenAPISDK\AlipayMarketingActivityDeliverychannelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMarketingActivityDeliverychannelApi.md#query) | **POST** /v3/alipay/marketing/activity/deliverychannel/query | 查询可推广渠道


## `query()`

```php
query($alipayMarketingActivityDeliverychannelQueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliverychannelQueryResponseModel
```

查询可推广渠道

查询可推广渠道。该接口会返回可以投放的所有渠道的详细信息。 其中每个渠道的boothCode含义：boothCode表达的是某个渠道可以投放的展位码。例如：支付结果页PAY_RESULT 其中每个渠道的channel含义：表达的是某个固定的渠道。例如：在boothCode = PAY_RESULT 的情况下， channel = 商户的pid。 该channel就是一个可以投放的渠道，投放后可以在对应的商户的支付结果页看到优惠券。后续创建投放时根据返回的 channel 选择投放渠道

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityDeliverychannelApi(
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

$alipayMarketingActivityDeliverychannelQueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliverychannelQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliverychannelQueryModel

try {
    $result = $apiInstance->query($alipayMarketingActivityDeliverychannelQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityDeliverychannelApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityDeliverychannelQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliverychannelQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliverychannelQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
