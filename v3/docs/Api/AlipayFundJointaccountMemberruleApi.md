# Alipay\OpenAPISDK\AlipayFundJointaccountMemberruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayFundJointaccountMemberruleApi.md#modify) | **POST** /v3/alipay/fund/jointaccount/memberrule/modify | 企业设置员工规则


## `modify()`

```php
modify($alipayFundJointaccountMemberruleModifyModel): object
```

企业设置员工规则

企业设置员工规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberruleApi(
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

$alipayFundJointaccountMemberruleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberruleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberruleModifyModel

try {
    $result = $apiInstance->modify($alipayFundJointaccountMemberruleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberruleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountMemberruleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberruleModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
