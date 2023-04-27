# Alipay\OpenAPISDK\AlipayMarketingCardFormtemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**set()**](AlipayMarketingCardFormtemplateApi.md#set) | **POST** /v3/alipay/marketing/card/formtemplate/set | 会员卡开卡表单模板配置


## `set()`

```php
set($alipayMarketingCardFormtemplateSetModel): object
```

会员卡开卡表单模板配置

会员卡开卡、用户授权确认

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardFormtemplateApi(
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

$alipayMarketingCardFormtemplateSetModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardFormtemplateSetModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardFormtemplateSetModel

try {
    $result = $apiInstance->set($alipayMarketingCardFormtemplateSetModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardFormtemplateApi->set: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardFormtemplateSetModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardFormtemplateSetModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
