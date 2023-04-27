# Alipay\OpenAPISDK\AlipayMarketingActivityUserApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchqueryvoucher()**](AlipayMarketingActivityUserApi.md#batchqueryvoucher) | **GET** /v3/alipay/marketing/activity/ordervoucher/user/batchqueryvoucher | 条件查询用户券
[**queryvoucher()**](AlipayMarketingActivityUserApi.md#queryvoucher) | **GET** /v3/alipay/marketing/activity/ordervoucher/user/voucher | 查询用户券详情


## `batchqueryvoucher()`

```php
batchqueryvoucher($authToken, $userId, $openId, $activityId, $belongMerchantId, $senderMerchantId, $voucherStatus, $pageNum, $merchantAccessMode, $pageSize): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityUserBatchqueryvoucherResponseModel
```

条件查询用户券

可通过该接口查询用户在某商户可用的全部券，可用于商户的小程序/H5中，用户\"我的优惠券\"或\"提交订单页\"展示优惠信息。只能查询商户配的券，无法查询平台优惠券。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityUserApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$userId = 2088512417841101; // string | 支付宝用户 id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户openId
$activityId = 2016042700826004508401111111; // string | 活动 id
$belongMerchantId = 2088202967380463; // string | 券归属商户
$senderMerchantId = 2088102161342862; // string | 券发放商户
$voucherStatus = SENDED; // string | 券状态，其中已过期状态可查询6个月内的数据
$pageNum = 1; // int | 分页查询页码
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式
$pageSize = 20; // int | 分页查询单页数据条数

try {
    $result = $apiInstance->batchqueryvoucher($authToken, $userId, $openId, $activityId, $belongMerchantId, $senderMerchantId, $voucherStatus, $pageNum, $merchantAccessMode, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityUserApi->batchqueryvoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **userId** | **string**| 支付宝用户 id | [optional]
 **openId** | **string**| 支付宝用户openId | [optional]
 **activityId** | **string**| 活动 id | [optional]
 **belongMerchantId** | **string**| 券归属商户 | [optional]
 **senderMerchantId** | **string**| 券发放商户 | [optional]
 **voucherStatus** | **string**| 券状态，其中已过期状态可查询6个月内的数据 | [optional]
 **pageNum** | **int**| 分页查询页码 | [optional]
 **merchantAccessMode** | **string**| 商户接入模式 | [optional]
 **pageSize** | **int**| 分页查询单页数据条数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityUserBatchqueryvoucherResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `queryvoucher()`

```php
queryvoucher($merchantId, $userId, $openId, $activityId, $voucherId, $voucherCode, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityUserQueryvoucherResponseModel
```

查询用户券详情

通过此接口可以查询用户券信息，包括用户券的基础信息、状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityUserApi(
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

$merchantId = 2088202967380463; // string | 商户 PID，默认为当前接口调用商户。
$userId = 2088512417841101; // string | 支付宝用户id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 支付宝用户openId
$activityId = 2016042700826004508401111111; // string | 活动 id。
$voucherId = 2021072900073002214009F8QHR3; // string | 用户券 id。支付宝为用户优惠券唯一分配的 id。
$voucherCode = ABE44; // string | 用户领取的商家券券码。
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式。

try {
    $result = $apiInstance->queryvoucher($merchantId, $userId, $openId, $activityId, $voucherId, $voucherCode, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityUserApi->queryvoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | **string**| 商户 PID，默认为当前接口调用商户。 | [optional]
 **userId** | **string**| 支付宝用户id | [optional]
 **openId** | **string**| 支付宝用户openId | [optional]
 **activityId** | **string**| 活动 id。 | [optional]
 **voucherId** | **string**| 用户券 id。支付宝为用户优惠券唯一分配的 id。 | [optional]
 **voucherCode** | **string**| 用户领取的商家券券码。 | [optional]
 **merchantAccessMode** | **string**| 商户接入模式。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityUserQueryvoucherResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
