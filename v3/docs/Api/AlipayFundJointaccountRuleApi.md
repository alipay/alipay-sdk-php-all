# Alipay\OpenAPISDK\AlipayFundJointaccountRuleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayFundJointaccountRuleApi.md#modify) | **POST** /v3/alipay/fund/jointaccount/rule/modify | 企业账户规则设置


## `modify()`

```php
modify($alipayFundJointaccountRuleModifyModel): object
```

企业账户规则设置

企业账户规则设置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountRuleApi(
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

$alipayFundJointaccountRuleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountRuleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountRuleModifyModel

try {
    $result = $apiInstance->modify($alipayFundJointaccountRuleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountRuleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountRuleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountRuleModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
