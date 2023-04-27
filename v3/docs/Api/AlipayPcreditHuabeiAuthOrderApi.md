# Alipay\OpenAPISDK\AlipayPcreditHuabeiAuthOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayPcreditHuabeiAuthOrderApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/order/query | 花呗先享订单查询接口
[**unfreeze()**](AlipayPcreditHuabeiAuthOrderApi.md#unfreeze) | **PUT** /v3/alipay/pcredit/huabei/auth/order/unfreeze | 花呗先享解冻或解约接口


## `query()`

```php
query($authOptId, $alipayUserId, $openId, $outRequestNo): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderQueryResponseModel
```

花呗先享订单查询接口

查询花呗先享冻结、解冻订单内容及状态。有3种查询方式。推荐商户优先使用auth_opt_id查询；其次是按照(alipay_user_id,out_request_no)组合方式查询；最后是单独通过out_request_no方式查询。  注意：最后一种方式，仅支持2019年2月15日开始的订单。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthOrderApi(
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

$authOptId = 2018081010020817070009689955; // string | 支付宝侧花呗冻结、解冻操作单据id。在原先的冻结或者解冻接口调用中同步返回给商户，或者通过商户通知返回给商户。按订单号查询时，此字段不可为空。
$alipayUserId = 2088101117955611; // string | 买家在支付宝的用户id。通过userid+请求流水号组合查询时，此字段不可为空。
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 买家在支付宝的用户id
$outRequestNo = 8077735255938032; // string | 商户原先调用冻结、解冻接口传入的请求流水号。按照流水号查询订单时，此字段不能为空。

try {
    $result = $apiInstance->query($authOptId, $alipayUserId, $openId, $outRequestNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authOptId** | **string**| 支付宝侧花呗冻结、解冻操作单据id。在原先的冻结或者解冻接口调用中同步返回给商户，或者通过商户通知返回给商户。按订单号查询时，此字段不可为空。 | [optional]
 **alipayUserId** | **string**| 买家在支付宝的用户id。通过userid+请求流水号组合查询时，此字段不可为空。 | [optional]
 **openId** | **string**| 买家在支付宝的用户id | [optional]
 **outRequestNo** | **string**| 商户原先调用冻结、解冻接口传入的请求流水号。按照流水号查询订单时，此字段不能为空。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unfreeze()`

```php
unfreeze($alipayPcreditHuabeiAuthOrderUnfreezeModel): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderUnfreezeResponseModel
```

花呗先享解冻或解约接口

用户已经开通花呗先享协议后，商户通过此接口解冻用户资金池金额，也可以解冻并解约。  如果是解约操作，则要求传入的解冻金额必须等于用户资金池余额。  注意：商户在发起解约前，请务必保证已经结算过用户会员费，一旦解约后，无法发起结算用户会员费操作。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthOrderApi(
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

$alipayPcreditHuabeiAuthOrderUnfreezeModel = new \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderUnfreezeModel(); // \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderUnfreezeModel

try {
    $result = $apiInstance->unfreeze($alipayPcreditHuabeiAuthOrderUnfreezeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthOrderApi->unfreeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayPcreditHuabeiAuthOrderUnfreezeModel** | **\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderUnfreezeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthOrderUnfreezeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
