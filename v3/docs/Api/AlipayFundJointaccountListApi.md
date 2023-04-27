# Alipay\OpenAPISDK\AlipayFundJointaccountListApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountListApi.md#query) | **GET** /v3/alipay/fund/jointaccount/list/query | 企业查询代付账户列表


## `query()`

```php
query($productCode, $bizScene, $operateRole, $agreementNo, $identity, $identityType): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountListQueryResponseModel
```

企业查询代付账户列表

企业查询代付账户列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountListApi(
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

$productCode = ENTERPRISE_PAY; // string | 产品码
$bizScene = DEFAULT; // string | 业务场景
$operateRole = CREATOR; // string | 角色：创建方(CREATOR)、参与方(PARTICIPANT)
$agreementNo = 208890097674621512231; // string | 授权协议号
$identity = name@email.com; // string | 员工账号：  identity_type是ALIPAY_USER_ID填支付宝会员ID（2088开头）；  是ALIPAY_LOGON_ID 填支付宝登录号
$identityType = ALIPAY_LOGON_ID; // string | 账号类型，目前支持如下类型： 1、ALIPAY_USER_ID 支付宝的会员ID 2、ALIPAY_LOGON_ID：支付宝登录号，支持邮箱和手机号格式

try {
    $result = $apiInstance->query($productCode, $bizScene, $operateRole, $agreementNo, $identity, $identityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountListApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码 | [optional]
 **bizScene** | **string**| 业务场景 | [optional]
 **operateRole** | **string**| 角色：创建方(CREATOR)、参与方(PARTICIPANT) | [optional]
 **agreementNo** | **string**| 授权协议号 | [optional]
 **identity** | **string**| 员工账号：  identity_type是ALIPAY_USER_ID填支付宝会员ID（2088开头）；  是ALIPAY_LOGON_ID 填支付宝登录号 | [optional]
 **identityType** | **string**| 账号类型，目前支持如下类型： 1、ALIPAY_USER_ID 支付宝的会员ID 2、ALIPAY_LOGON_ID：支付宝登录号，支持邮箱和手机号格式 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountListQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
