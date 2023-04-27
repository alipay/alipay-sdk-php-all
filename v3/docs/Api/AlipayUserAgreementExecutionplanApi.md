# Alipay\OpenAPISDK\AlipayUserAgreementExecutionplanApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayUserAgreementExecutionplanApi.md#modify) | **POST** /v3/alipay/user/agreement/executionplan/modify | 周期性扣款协议执行计划修改接口


## `modify()`

```php
modify($alipayUserAgreementExecutionplanModifyModel): \Alipay\OpenAPISDK\Model\AlipayUserAgreementExecutionplanModifyResponseModel
```

周期性扣款协议执行计划修改接口

周期性扣款产品，商户延期扣款接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementExecutionplanApi(
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

$alipayUserAgreementExecutionplanModifyModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementExecutionplanModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementExecutionplanModifyModel

try {
    $result = $apiInstance->modify($alipayUserAgreementExecutionplanModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementExecutionplanApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementExecutionplanModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementExecutionplanModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementExecutionplanModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
