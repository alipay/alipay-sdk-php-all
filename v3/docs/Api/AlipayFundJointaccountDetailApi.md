# Alipay\OpenAPISDK\AlipayFundJointaccountDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountDetailApi.md#query) | **GET** /v3/alipay/fund/jointaccount/detail/query | 共享资金-查询账户详情


## `query()`

```php
query($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel
```

共享资金-查询账户详情

发起人在商户上点击查看账户详情，商户服务端进行受理，并调用支付宝进行处理。处理结果，同步返回给商户。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountDetailApi(
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
$bizScene = DEFAULT; // string | 业务场景码
$accountId = 2088xxx; // string | 合花群ID（查询方式二：通过传入account_id+agreement_no查询）<br> 补充说明：<br> -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。<br> -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。
$agreementNo = 2088xxx; // string | 授权协议号（查询方式二：通过传入account_id+agreement_no查询）<br> 补充说明：<br> -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。<br> -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。
$outBizNo = 无; // string | 商户侧单号（查询方式一：通过传入 out_biz_no查询）<br> 补充说明：<br> -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致
$channel = MMJZ; // string | 业务渠道</br> 补充说明：</br> 需要商户侧必传，支付宝侧不做强校验

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountId, $agreementNo, $outBizNo, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountDetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 销售产品码 | [optional]
 **bizScene** | **string**| 业务场景码 | [optional]
 **accountId** | **string**| 合花群ID（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 | [optional]
 **agreementNo** | **string**| 授权协议号（查询方式二：通过传入account_id+agreement_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段可在签约接口alipay.fund.jointaccount.sign调用后，由账户变更结果通知接口alipay.fund.jointaccount.account.completed中返回。&lt;br&gt; -该字段可在签约接口调用后，由查询账户详情接口alipay.fund.jointaccount.detail.query中返回。 | [optional]
 **outBizNo** | **string**| 商户侧单号（查询方式一：通过传入 out_biz_no查询）&lt;br&gt; 补充说明：&lt;br&gt; -该字段与签约接口alipay.fund.jointaccount.sign请求参数中传入值保持一致 | [optional]
 **channel** | **string**| 业务渠道&lt;/br&gt; 补充说明：&lt;/br&gt; 需要商户侧必传，支付宝侧不做强校验 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountDetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
