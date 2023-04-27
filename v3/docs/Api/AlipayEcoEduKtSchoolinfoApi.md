# Alipay\OpenAPISDK\AlipayEcoEduKtSchoolinfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEcoEduKtSchoolinfoApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/schoolinfo/modify | 教育缴费学校信息录入接口


## `modify()`

```php
modify($alipayEcoEduKtSchoolinfoModifyModel): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtSchoolinfoModifyResponseModel
```

教育缴费学校信息录入接口

ISV与支付宝签约后，通过此接口同步学校信息到中小学教育平台。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtSchoolinfoApi(
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

$alipayEcoEduKtSchoolinfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEcoEduKtSchoolinfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoEduKtSchoolinfoModifyModel

try {
    $result = $apiInstance->modify($alipayEcoEduKtSchoolinfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtSchoolinfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoEduKtSchoolinfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoEduKtSchoolinfoModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtSchoolinfoModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
