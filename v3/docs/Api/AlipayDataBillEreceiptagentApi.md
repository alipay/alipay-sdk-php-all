# Alipay\OpenAPISDK\AlipayDataBillEreceiptagentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayDataBillEreceiptagentApi.md#apply) | **POST** /v3/alipay/data/bill/ereceiptagent/apply | ISV代理商户申请电子回单


## `apply()`

```php
apply($alipayDataBillEreceiptagentApplyModel): \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptagentApplyResponseModel
```

ISV代理商户申请电子回单

ISV代理商户，申请商户的资金业务回单。  电子签章申请分两个步骤： 1、使用alipay.data.bill.ereceiptagent.apply创建申请，并获取file_id信息。 2、等待一段时间后，使用file_id查询alipay.data.bill.ereceipt.query申请信息。单个申请建议每5分钟查询一次状态，汇总（日/月）回单建议20分钟查询一次。月初回单生成较慢，请耐心等待（汇总回单在月初申请需要等待几个小时） 注：申请成功，并不代表明细查询的流水一定存在。如果流水不存在，在查询时将会提示。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillEreceiptagentApi(
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

$alipayDataBillEreceiptagentApplyModel = new \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptagentApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptagentApplyModel

try {
    $result = $apiInstance->apply($alipayDataBillEreceiptagentApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillEreceiptagentApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayDataBillEreceiptagentApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptagentApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptagentApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
