# Alipay\OpenAPISDK\AlipayMerchantTradecomplainSupplementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submit()**](AlipayMerchantTradecomplainSupplementApi.md#submit) | **POST** /v3/alipay/merchant/tradecomplain/supplement | 商家补充凭证


## `submit()`

```php
submit($alipayMerchantTradecomplainSupplementSubmitModel): object
```

商家补充凭证

投诉进入平台处理中状态时，为保证客服能准确判定责任方，可使用此接口补充文字或图片说明问题及处理经过

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantTradecomplainSupplementApi(
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

$alipayMerchantTradecomplainSupplementSubmitModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainSupplementSubmitModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainSupplementSubmitModel

try {
    $result = $apiInstance->submit($alipayMerchantTradecomplainSupplementSubmitModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantTradecomplainSupplementApi->submit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantTradecomplainSupplementSubmitModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainSupplementSubmitModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
