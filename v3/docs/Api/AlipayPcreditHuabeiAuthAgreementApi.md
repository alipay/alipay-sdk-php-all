# Alipay\OpenAPISDK\AlipayPcreditHuabeiAuthAgreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**close()**](AlipayPcreditHuabeiAuthAgreementApi.md#close) | **PUT** /v3/alipay/pcredit/huabei/auth/agreement/close | 花芝协议关闭接口
[**query()**](AlipayPcreditHuabeiAuthAgreementApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/agreement/query | 花芝轻会员协议查询接口


## `close()`

```php
close($alipayPcreditHuabeiAuthAgreementCloseModel): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementCloseResponseModel
```

花芝协议关闭接口

用户已经开通花芝先享后，商户可通过此接口提前关闭协议。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthAgreementApi(
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

$alipayPcreditHuabeiAuthAgreementCloseModel = new \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementCloseModel(); // \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementCloseModel

try {
    $result = $apiInstance->close($alipayPcreditHuabeiAuthAgreementCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthAgreementApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayPcreditHuabeiAuthAgreementCloseModel** | **\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementCloseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementCloseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($agreementNo, $alipayUserId, $openId, $outSignNo, $authScene): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementQueryResponseModel
```

花芝轻会员协议查询接口

花芝轻会员协议查询，返回协议的状态。如果协议处于签约状态，同时返回最新的资金池余额。 有两种方式查询。优先使用agreement_no查询；其次是使用(out_sign_no, auth_scene)查询。 如果商户不能保证out_sign_no的唯一性，慎用(out_sign_no, auth_scene)的查询方式，它优先返回仍处于签约状态的协议。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthAgreementApi(
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

$agreementNo = 20185513447859192007; // string | 支付宝系统中用以唯一标识用户签约记录的编号，即花芝轻会员。传入该参数，会忽略其它所有参数。
$alipayUserId = 2088101117955611; // string | 买家在支付宝的用户id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 买家在支付宝的用户id
$outSignNo = 2018053100073208416400000002; // string | 外部签约号，由商户提供，花芝轻会员协议中标识用户的唯一签约号（确保在商户系统中唯一）。
$authScene = EXTERNAL_PCARD; // string | 花芝轻会员签约场景，商户和支付宝签约时确定。该值需要与系统/页面签约接口调用时传入的值保持一致。

try {
    $result = $apiInstance->query($agreementNo, $alipayUserId, $openId, $outSignNo, $authScene);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthAgreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementNo** | **string**| 支付宝系统中用以唯一标识用户签约记录的编号，即花芝轻会员。传入该参数，会忽略其它所有参数。 | [optional]
 **alipayUserId** | **string**| 买家在支付宝的用户id | [optional]
 **openId** | **string**| 买家在支付宝的用户id | [optional]
 **outSignNo** | **string**| 外部签约号，由商户提供，花芝轻会员协议中标识用户的唯一签约号（确保在商户系统中唯一）。 | [optional]
 **authScene** | **string**| 花芝轻会员签约场景，商户和支付宝签约时确定。该值需要与系统/页面签约接口调用时传入的值保持一致。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAgreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
