# Alipay\OpenAPISDK\ZhimaCreditPeZmgoAgreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaCreditPeZmgoAgreementApi.md#query) | **GET** /v3/zhima/credit/pe/zmgo/agreement/query | 芝麻Go协议查询接口
[**unsign()**](ZhimaCreditPeZmgoAgreementApi.md#unsign) | **POST** /v3/zhima/credit/pe/zmgo/agreement/unsign | 芝麻GO协议解约


## `query()`

```php
query($agreementId, $alipayUserId, $openId): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementQueryResponseModel
```

芝麻Go协议查询接口

用户已经开通芝麻GO后，通过此接口查询协议。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoAgreementApi(
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

$agreementId = 20185513447859192007; // string | 支付宝系统中用以唯一标识用户签约记录的编号，即花芝轻会员。传入该参数，会忽略其它所有参数。
$alipayUserId = 2088101117955611; // string | 买家在支付宝的用户id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 买家在支付宝的用户id

try {
    $result = $apiInstance->query($agreementId, $alipayUserId, $openId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoAgreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementId** | **string**| 支付宝系统中用以唯一标识用户签约记录的编号，即花芝轻会员。传入该参数，会忽略其它所有参数。 | [optional]
 **alipayUserId** | **string**| 买家在支付宝的用户id | [optional]
 **openId** | **string**| 买家在支付宝的用户id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsign()`

```php
unsign($zhimaCreditPeZmgoAgreementUnsignModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementUnsignResponseModel
```

芝麻GO协议解约

芝麻GO协议解约

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoAgreementApi(
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

$zhimaCreditPeZmgoAgreementUnsignModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementUnsignModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementUnsignModel

try {
    $result = $apiInstance->unsign($zhimaCreditPeZmgoAgreementUnsignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoAgreementApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoAgreementUnsignModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementUnsignModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoAgreementUnsignResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
