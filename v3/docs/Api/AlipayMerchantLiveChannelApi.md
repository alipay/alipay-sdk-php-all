# Alipay\OpenAPISDK\AlipayMerchantLiveChannelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMerchantLiveChannelApi.md#query) | **GET** /v3/alipay/merchant/live/channel/query | 渠道信息查询


## `query()`

```php
query($secret): \Alipay\OpenAPISDK\Model\AlipayMerchantLiveChannelQueryResponseModel
```

渠道信息查询

根据直播等内容域跳转小程序下单时携带的orderStartId，回查业务主体信息(如操作人、主播、直播、文章等，用于外部业务信息补全、返佣等)。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantLiveChannelApi(
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

$secret = b07d6694341b69c406522d3ff28d9807; // string | 渠道下单参数(orderStartId)

try {
    $result = $apiInstance->query($secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantLiveChannelApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secret** | **string**| 渠道下单参数(orderStartId) | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantLiveChannelQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
