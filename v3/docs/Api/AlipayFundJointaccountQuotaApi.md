# Alipay\OpenAPISDK\AlipayFundJointaccountQuotaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountQuotaApi.md#query) | **GET** /v3/alipay/fund/jointaccount/quota/query | 查询账户额度详情


## `query()`

```php
query($productCode, $bizScene, $accountId, $memberId, $memberOpenId, $operateRole, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountQuotaQueryResponseModel
```

查询账户额度详情

查询账户额度详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountQuotaApi(
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
$accountId = 2088900976746215; // string | 账户ID
$memberId = 2088900976746215; // string | 员工ID
$memberOpenId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 员工的openid
$operateRole = CREATOR; // string | 角色：创建方(CREATOR)、参与方(PARTICIPANT)
$agreementNo = 208890097674621512312; // string | 授权协议号

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountId, $memberId, $memberOpenId, $operateRole, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountQuotaApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码 | [optional]
 **bizScene** | **string**| 业务场景 | [optional]
 **accountId** | **string**| 账户ID | [optional]
 **memberId** | **string**| 员工ID | [optional]
 **memberOpenId** | **string**| 员工的openid | [optional]
 **operateRole** | **string**| 角色：创建方(CREATOR)、参与方(PARTICIPANT) | [optional]
 **agreementNo** | **string**| 授权协议号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountQuotaQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
