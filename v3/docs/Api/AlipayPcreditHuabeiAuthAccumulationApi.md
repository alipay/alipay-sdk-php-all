# Alipay\OpenAPISDK\AlipayPcreditHuabeiAuthAccumulationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayPcreditHuabeiAuthAccumulationApi.md#query) | **GET** /v3/alipay/pcredit/huabei/auth/accumulation/query | 花芝轻会员周期累计数据查询


## `query()`

```php
query($agreementNo, $period, $alipayUserId, $openId): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAccumulationQueryResponseModel
```

花芝轻会员周期累计数据查询

根据协议与对应的周期查询支付宝累计数据。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthAccumulationApi(
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

$agreementNo = 20170502000610755993; // string | 支付宝系统中用以唯一标识用户签约记录的编号。
$period = 20181223235059-20181230235010; // string | 协议结算周期，使用支付宝端回传的周期信息。
$alipayUserId = 2088101117955611; // string | 买家在支付宝的用户id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 买家在支付宝的用户id

try {
    $result = $apiInstance->query($agreementNo, $period, $alipayUserId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthAccumulationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementNo** | **string**| 支付宝系统中用以唯一标识用户签约记录的编号。 | [optional]
 **period** | **string**| 协议结算周期，使用支付宝端回传的周期信息。 | [optional]
 **alipayUserId** | **string**| 买家在支付宝的用户id | [optional]
 **openId** | **string**| 买家在支付宝的用户id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthAccumulationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
