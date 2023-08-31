# Alipay\OpenAPISDK\AlipayMarketingCardActivateformApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMarketingCardActivateformApi.md#query) | **GET** /v3/alipay/marketing/card/activateform/query | 查询用户提交的会员卡表单信息


## `query()`

```php
query($authToken, $bizType, $templateId, $requestId): \Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateformQueryResponseModel
```

查询用户提交的会员卡表单信息

会员卡开卡场景下，用户确认领卡后，跳转到商户开卡处理页面，商户通过该接口查询用户表单信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardActivateformApi(
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
$bizType = MEMBER_CARD; // string | 开放表单信息查询业务类型
$templateId = 2071828288283883; // string | 会员卡模板id。使用会员卡模板创建接口(alipay.marketing.card.template.create)返回的结果
$requestId = 2017021929993993992839493394; // string | 查询用户表单提交信息的请求id。  网页移动应用&小程序应用：与auth_code 一起通过alipay.marketing.card.activateurl.apply(获取会员卡领卡投放链接)接口callback地址回传。  注意：auth_code（用户授权码）用于换取用户授权令牌 accessToken，后续调用接口需传入accessToken。

try {
    $result = $apiInstance->query($authToken, $bizType, $templateId, $requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardActivateformApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **bizType** | **string**| 开放表单信息查询业务类型 | [optional]
 **templateId** | **string**| 会员卡模板id。使用会员卡模板创建接口(alipay.marketing.card.template.create)返回的结果 | [optional]
 **requestId** | **string**| 查询用户表单提交信息的请求id。  网页移动应用&amp;小程序应用：与auth_code 一起通过alipay.marketing.card.activateurl.apply(获取会员卡领卡投放链接)接口callback地址回传。  注意：auth_code（用户授权码）用于换取用户授权令牌 accessToken，后续调用接口需传入accessToken。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateformQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
