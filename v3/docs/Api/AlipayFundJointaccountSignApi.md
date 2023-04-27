# Alipay\OpenAPISDK\AlipayFundJointaccountSignApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountSignApi.md#query) | **GET** /v3/alipay/fund/jointaccount/sign/query | 企业签约结果查询


## `query()`

```php
query($productCode, $bizScene, $outBizNo, $accountId): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountSignQueryResponseModel
```

企业签约结果查询

通过外部订单号（out_biz_no）主动查询企业签约结果，可用于未收到签约结果通知的补偿操作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountSignApi(
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

$productCode = ENTERPRISE_PAY; // string | 产品码，默认值 ENTERPRISE_PAY
$bizScene = ISV_ALIYUN; // string | 场景码，联系支付宝分配
$outBizNo = 123123132; // string | 外部业务号，查询对应账户状态，优先级高于account_id
$accountId = 208812312313213; // string | 企业签约账户ID,用于外部商户已获取企业签约ID，查询账户状态

try {
    $result = $apiInstance->query($productCode, $bizScene, $outBizNo, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountSignApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码，默认值 ENTERPRISE_PAY | [optional]
 **bizScene** | **string**| 场景码，联系支付宝分配 | [optional]
 **outBizNo** | **string**| 外部业务号，查询对应账户状态，优先级高于account_id | [optional]
 **accountId** | **string**| 企业签约账户ID,用于外部商户已获取企业签约ID，查询账户状态 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountSignQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
