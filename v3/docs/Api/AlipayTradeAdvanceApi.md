# Alipay\OpenAPISDK\AlipayTradeAdvanceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](AlipayTradeAdvanceApi.md#consult) | **GET** /v3/alipay/trade/advance/consult | 订单咨询服务


## `consult()`

```php
consult($alipayUserId, $consultScene, $industryProductCode, $subMerchantId, $subMerchantType, $agreementNo, $estimatedOrderAmount, $outTradeNo, $needUserRiskPrediction, $tradeDigest, $userOutBindingPhone): \Alipay\OpenAPISDK\Model\AlipayTradeAdvanceConsultResponseModel
```

订单咨询服务

商户通过此接口咨询，当前用户是否满足垫资服务条件 或者 针对单笔订单的风险评估进行预咨询服务。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeAdvanceApi(
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

$alipayUserId = 2088302483540171; // string | 支付宝用户 id，2088开头的16为数字。 除单笔订单风险预评估场景(即consult_scene指定ORDER_RISK_EVALUATION)外，其他场景必选。
$consultScene = ORDER_RISK_EVALUATION; // string | 订单咨询类型，用以选择咨询的服务。不传时默认为垫资咨询，其他的场景需要按照对接的服务传入指定的值。 ORDER_RISK_EVALUATION：表示单笔订单风险预评估。
$industryProductCode = CAR_OWNERS_PARKINGPAY; // string | 行业产品信息，咨询时会从该产品对应的销售方案中获取相关垫资规则配置。
$subMerchantId = 2088102122458832; // string | 子商户id
$subMerchantType = PARTNER; // string | 子商户类型
$agreementNo = 20170322450983769228; // string | 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ） ，在进行单笔订单风险评估预咨询时必传。
$estimatedOrderAmount = 9.00; // string | 预估订单总金额，单位为元，精确到小数点后两位，单笔订单风险预评估时使用，取值范围[0.01,100000000]。
$outTradeNo = test20191100000001; // string | 商户请求时的外部订单号，在花芝场景下非空。
$needUserRiskPrediction = true; // string | 是否需要进行用户风险预测
$tradeDigest = {{"parking_city":"太原市","vehicle_number":"辽7666666"}}; // string | 交易信息摘要，需要进行用户风险预测时可传，用于结合场景的更加精细的预测。具体信息结构服务接入前咨询约定。
$userOutBindingPhone = 1868888888888; // string | 用户在外部域账号系统绑定的手机号，需要进行用户风险预测时必传，用于预测用户是否面临被二次放号的场景。使用时需要对请求加密，加密后请求在公网传输时为加密文本。详见：https://opendocs.alipay.com/open/common/104567；https://opendocs.alipay.com/isv/grefvl/getaes

try {
    $result = $apiInstance->consult($alipayUserId, $consultScene, $industryProductCode, $subMerchantId, $subMerchantType, $agreementNo, $estimatedOrderAmount, $outTradeNo, $needUserRiskPrediction, $tradeDigest, $userOutBindingPhone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeAdvanceApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserId** | **string**| 支付宝用户 id，2088开头的16为数字。 除单笔订单风险预评估场景(即consult_scene指定ORDER_RISK_EVALUATION)外，其他场景必选。 | [optional]
 **consultScene** | **string**| 订单咨询类型，用以选择咨询的服务。不传时默认为垫资咨询，其他的场景需要按照对接的服务传入指定的值。 ORDER_RISK_EVALUATION：表示单笔订单风险预评估。 | [optional]
 **industryProductCode** | **string**| 行业产品信息，咨询时会从该产品对应的销售方案中获取相关垫资规则配置。 | [optional]
 **subMerchantId** | **string**| 子商户id | [optional]
 **subMerchantType** | **string**| 子商户类型 | [optional]
 **agreementNo** | **string**| 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ） ，在进行单笔订单风险评估预咨询时必传。 | [optional]
 **estimatedOrderAmount** | **string**| 预估订单总金额，单位为元，精确到小数点后两位，单笔订单风险预评估时使用，取值范围[0.01,100000000]。 | [optional]
 **outTradeNo** | **string**| 商户请求时的外部订单号，在花芝场景下非空。 | [optional]
 **needUserRiskPrediction** | **string**| 是否需要进行用户风险预测 | [optional]
 **tradeDigest** | **string**| 交易信息摘要，需要进行用户风险预测时可传，用于结合场景的更加精细的预测。具体信息结构服务接入前咨询约定。 | [optional]
 **userOutBindingPhone** | **string**| 用户在外部域账号系统绑定的手机号，需要进行用户风险预测时必传，用于预测用户是否面临被二次放号的场景。使用时需要对请求加密，加密后请求在公网传输时为加密文本。详见：https://opendocs.alipay.com/open/common/104567；https://opendocs.alipay.com/isv/grefvl/getaes | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeAdvanceConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
