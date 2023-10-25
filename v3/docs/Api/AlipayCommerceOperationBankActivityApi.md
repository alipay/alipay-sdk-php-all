# Alipay\OpenAPISDK\AlipayCommerceOperationBankActivityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceOperationBankActivityApi.md#query) | **GET** /v3/alipay/commerce/operation/bank/activity/query | 银行活动信息查询


## `query()`

```php
query($openId, $userId): \Alipay\OpenAPISDK\Model\AlipayCommerceOperationBankActivityQueryResponseModel
```

银行活动信息查询

银行活动信息查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceOperationBankActivityApi(
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

$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝openId
$userId = 208822294389xxxx; // string | 蚂蚁统一会员ID

try {
    $result = $apiInstance->query($openId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceOperationBankActivityApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **openId** | **string**| 支付宝openId | [optional]
 **userId** | **string**| 蚂蚁统一会员ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceOperationBankActivityQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
