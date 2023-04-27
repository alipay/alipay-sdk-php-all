# Alipay\OpenAPISDK\AlipayFundTransCommonApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundTransCommonApi.md#query) | **GET** /v3/alipay/fund/trans/common/query | 转账业务单据查询接口


## `query()`

```php
query($productCode, $bizScene, $outBizNo, $orderId, $payFundOrderId): \Alipay\OpenAPISDK\Model\AlipayFundTransCommonQueryResponseModel
```

转账业务单据查询接口

商户可通过该接口查询转账业务单据的状态，主要应用于统一转账接口(alipay.fund.trans.uni.transfer)、无线转账接口(alipay.fund.trans.app.pay)、单笔转账到支付宝账户接口（alipay.fund.trans.toaccount.transfer）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransCommonApi(
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

$productCode = STD_RED_PACKET; // string | 销售产品码，商家和支付宝签约的产品码，如果传递了out_biz_no则该字段为必传。可传值如下： STD_RED_PACKET：现金红包 TRANS_ACCOUNT_NO_PWD：单笔无密转账到支付宝账户 TRANS_BANKCARD_NO_PWD：单笔无密转账到银行卡
$bizScene = PERSONAL_PAY; // string | 描述特定的业务场景，如果传递了out_biz_no则该字段为必传。可取的业务场景如下：  PERSONAL_PAY：C2C现金红包-发红包；  PERSONAL_COLLECTION：C2C现金红包-领红包；  REFUND：C2C现金红包-红包退回；  DIRECT_TRANSFER：B2C现金红包、单笔无密转账
$outBizNo = 201808080001; // string | 商户转账唯一订单号，发起转账来源方定义的转账单据ID。  本参数和order_id（支付宝转账单据号）、pay_fund_order_id（支付宝支付资金流水号）三者不能同时为空。 当三者同时传入时，将用pay_fund_order_id（支付宝支付资金流水号）进行查询，忽略其余两者； 当本参数和支付宝转账单据号同时提供时，将用支付宝转账单据号进行查询，忽略本参数。
$orderId = 20190801110070000006380000250621; // string | 支付宝转账单据号。 本参数和out_biz_no（商户转账唯一订单号）、pay_fund_order_id（支付宝支付资金流水号）三者不能同时为空。  当三者同时传入时，将用pay_fund_order_id（支付宝支付资金流水号）进行查询，忽略其余两者； 当本参数和pay_fund_order_id（支付宝支付资金流水号）同时提供时，将用支付宝支付资金流水号进行查询，忽略本参数；  当本参数和out_biz_no（商户转账唯一订单号）同时提供时，将用本参数进行查询，忽略商户转账唯一订单号。
$payFundOrderId = 20190801110070001506380000251556; // string | 支付宝支付资金流水号。本参数和支付宝转账单据号、商户转账唯一订单号三者不能同时为空。  当本参数和out_biz_no（商户转账唯一订单号）、order_id（支付宝转账单据号）同时提供时，将用本参数进行查询，忽略其余两者； 当本参数和order_id（支付宝转账单据号）同时提供时，将用本参数进行查询，忽略支付宝转账单据号；  当本参数和out_biz_no（商户转账唯一订单号）同时提供时，将用本参数进行查询，忽略商户转账唯一订单号。

try {
    $result = $apiInstance->query($productCode, $bizScene, $outBizNo, $orderId, $payFundOrderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransCommonApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 销售产品码，商家和支付宝签约的产品码，如果传递了out_biz_no则该字段为必传。可传值如下： STD_RED_PACKET：现金红包 TRANS_ACCOUNT_NO_PWD：单笔无密转账到支付宝账户 TRANS_BANKCARD_NO_PWD：单笔无密转账到银行卡 | [optional]
 **bizScene** | **string**| 描述特定的业务场景，如果传递了out_biz_no则该字段为必传。可取的业务场景如下：  PERSONAL_PAY：C2C现金红包-发红包；  PERSONAL_COLLECTION：C2C现金红包-领红包；  REFUND：C2C现金红包-红包退回；  DIRECT_TRANSFER：B2C现金红包、单笔无密转账 | [optional]
 **outBizNo** | **string**| 商户转账唯一订单号，发起转账来源方定义的转账单据ID。  本参数和order_id（支付宝转账单据号）、pay_fund_order_id（支付宝支付资金流水号）三者不能同时为空。 当三者同时传入时，将用pay_fund_order_id（支付宝支付资金流水号）进行查询，忽略其余两者； 当本参数和支付宝转账单据号同时提供时，将用支付宝转账单据号进行查询，忽略本参数。 | [optional]
 **orderId** | **string**| 支付宝转账单据号。 本参数和out_biz_no（商户转账唯一订单号）、pay_fund_order_id（支付宝支付资金流水号）三者不能同时为空。  当三者同时传入时，将用pay_fund_order_id（支付宝支付资金流水号）进行查询，忽略其余两者； 当本参数和pay_fund_order_id（支付宝支付资金流水号）同时提供时，将用支付宝支付资金流水号进行查询，忽略本参数；  当本参数和out_biz_no（商户转账唯一订单号）同时提供时，将用本参数进行查询，忽略商户转账唯一订单号。 | [optional]
 **payFundOrderId** | **string**| 支付宝支付资金流水号。本参数和支付宝转账单据号、商户转账唯一订单号三者不能同时为空。  当本参数和out_biz_no（商户转账唯一订单号）、order_id（支付宝转账单据号）同时提供时，将用本参数进行查询，忽略其余两者； 当本参数和order_id（支付宝转账单据号）同时提供时，将用本参数进行查询，忽略支付宝转账单据号；  当本参数和out_biz_no（商户转账唯一订单号）同时提供时，将用本参数进行查询，忽略商户转账唯一订单号。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransCommonQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
