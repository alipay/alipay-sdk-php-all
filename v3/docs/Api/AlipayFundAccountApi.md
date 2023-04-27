# Alipay\OpenAPISDK\AlipayFundAccountApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundAccountApi.md#query) | **GET** /v3/alipay/fund/account/query | 支付宝资金账户资产查询接口


## `query()`

```php
query($merchantUserId, $alipayUserId, $alipayOpenId, $accountProductCode, $accountType, $accountSceneCode, $extInfo): \Alipay\OpenAPISDK\Model\AlipayFundAccountQueryResponseModel
```

支付宝资金账户资产查询接口

可查询请求方的支付宝账户余额信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountApi(
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

$merchantUserId = 243893499; // string | 商户会员的唯一标识。如果传入的user_id为虚拟账户userId，此字段必传并比对一致性。
$alipayUserId = 2088301409188095; // string | 支付宝会员 id。
$alipayOpenId = 061P6NAblcWDWJoDRxSVvOYz-ufp-3wQaA4E_szQyMFTXse; // string | 支付宝openId
$accountProductCode = DING_ACCOUNT; // string | 开户产品码。如果查询托管子户余额，必传且必须传入与开户时传入的值一致。
$accountType = ACCTRANS_ACCOUNT; // string | 查询的账号类型，查询余额账户值为ACCTRANS_ACCOUNT。必填。
$accountSceneCode = SCENE_000_000_000; // string | 开户场景码，与开户产品码不可同时传递。
$extInfo = {"agreement_no":"2019000000000"}; // string | JSON格式，传递业务扩展参数。

try {
    $result = $apiInstance->query($merchantUserId, $alipayUserId, $alipayOpenId, $accountProductCode, $accountType, $accountSceneCode, $extInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserId** | **string**| 商户会员的唯一标识。如果传入的user_id为虚拟账户userId，此字段必传并比对一致性。 | [optional]
 **alipayUserId** | **string**| 支付宝会员 id。 | [optional]
 **alipayOpenId** | **string**| 支付宝openId | [optional]
 **accountProductCode** | **string**| 开户产品码。如果查询托管子户余额，必传且必须传入与开户时传入的值一致。 | [optional]
 **accountType** | **string**| 查询的账号类型，查询余额账户值为ACCTRANS_ACCOUNT。必填。 | [optional]
 **accountSceneCode** | **string**| 开户场景码，与开户产品码不可同时传递。 | [optional]
 **extInfo** | **string**| JSON格式，传递业务扩展参数。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
