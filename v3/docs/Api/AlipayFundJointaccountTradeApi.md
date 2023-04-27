# Alipay\OpenAPISDK\AlipayFundJointaccountTradeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountTradeApi.md#query) | **GET** /v3/alipay/fund/jointaccount/trade/query | 共同账户交易查询


## `query()`

```php
query($productCode, $bizScene, $memberId, $memberOpenId, $accountId, $agreementNo, $tradeNo, $platformOrderId): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountTradeQueryResponseModel
```

共同账户交易查询

共同账户交易查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountTradeApi(
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

$productCode = ENTERPRISE_PAY; // string | 销售产品码
$bizScene = ELE_ONLINE; // string | 业务场景
$memberId = 208811123123; // string | 成员ID，消费发起人
$memberOpenId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 消费发起人的openId
$accountId = 208811123123; // string | 企业账户ID
$agreementNo = 12312312313123; // string | 三方授权协议号
$tradeNo = 12312313123; // string | 支付宝交易订单号
$platformOrderId = 781773393333012410369282; // string | 外部平台订单号。使用该参数查询时，返回结果见trade_info_list

try {
    $result = $apiInstance->query($productCode, $bizScene, $memberId, $memberOpenId, $accountId, $agreementNo, $tradeNo, $platformOrderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountTradeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 销售产品码 | [optional]
 **bizScene** | **string**| 业务场景 | [optional]
 **memberId** | **string**| 成员ID，消费发起人 | [optional]
 **memberOpenId** | **string**| 消费发起人的openId | [optional]
 **accountId** | **string**| 企业账户ID | [optional]
 **agreementNo** | **string**| 三方授权协议号 | [optional]
 **tradeNo** | **string**| 支付宝交易订单号 | [optional]
 **platformOrderId** | **string**| 外部平台订单号。使用该参数查询时，返回结果见trade_info_list | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountTradeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
