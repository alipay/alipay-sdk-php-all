# Alipay\OpenAPISDK\AlipayOpenPublicTemplateMessageIndustryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenPublicTemplateMessageIndustryApi.md#modify) | **POST** /v3/alipay/open/public/template/message/industry/modify | 模板消息行业设置修改接口


## `modify()`

```php
modify($alipayOpenPublicTemplateMessageIndustryModifyModel): object
```

模板消息行业设置修改接口

用于修改服务窗消息模板设置的行业信息，如：IT科技/IT软件与服务。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicTemplateMessageIndustryApi(
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

$alipayOpenPublicTemplateMessageIndustryModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicTemplateMessageIndustryModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicTemplateMessageIndustryModifyModel

try {
    $result = $apiInstance->modify($alipayOpenPublicTemplateMessageIndustryModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicTemplateMessageIndustryApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicTemplateMessageIndustryModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicTemplateMessageIndustryModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
