# Alipay\OpenAPISDK\AlipayFundTransToaccountApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer()**](AlipayFundTransToaccountApi.md#transfer) | **POST** /v3/alipay/fund/trans/toaccount/transfer | 单笔转账到支付宝账户接口


## `transfer()`

```php
transfer($alipayFundTransToaccountTransferModel): \Alipay\OpenAPISDK\Model\AlipayFundTransToaccountTransferResponseModel
```

单笔转账到支付宝账户接口

单笔转账到支付宝账户接口是基于支付宝的资金处理能力，为了满足支付宝商家向其他支付宝账户转账的需求，针对有部分开发能力的商家，提供通过API接口完成支付宝账户间的转账的功能。 该接口适用行业较广，比如商家间的货款结算，商家给个人用户发放佣金等。（目前已对该接口能力做了升级，后续建议调用新接口alipay.fund.trans.uni.transfer）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransToaccountApi(
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

$alipayFundTransToaccountTransferModel = new \Alipay\OpenAPISDK\Model\AlipayFundTransToaccountTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayFundTransToaccountTransferModel

try {
    $result = $apiInstance->transfer($alipayFundTransToaccountTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransToaccountApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundTransToaccountTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayFundTransToaccountTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransToaccountTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
