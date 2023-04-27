# Alipay\OpenAPISDK\AlipayUserCertdocCertverifyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](AlipayUserCertdocCertverifyApi.md#consult) | **GET** /v3/alipay/user/certdoc/certverify/consult | 实名证件信息比对验证咨询
[**preconsult()**](AlipayUserCertdocCertverifyApi.md#preconsult) | **POST** /v3/alipay/user/certdoc/certverify/preconsult | 实名证件信息比对验证预咨询


## `consult()`

```php
consult($authToken, $verifyId): \Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyConsultResponseModel
```

实名证件信息比对验证咨询

商户在预咨询接口（接口1）预先录入某用户的实名证件信息（例如姓名、身份证号等），获得用户授权后调用本咨询接口（接口2），将对比该用户的支付宝实名信息与（接口1）传入的信息是否一致。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserCertdocCertverifyApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$verifyId = 671ffcda5447bc87e9ed2f669eb143d4; // string | 信息校验验证ID。通过<a href=\"https://opendocs.alipay.com/apis/api_2/alipay.user.certdoc.certverify.preconsult\">alipay.user.certdoc.certverify.preconsult</a>(实名证件信息比对验证预咨询)接口获取。

try {
    $result = $apiInstance->consult($authToken, $verifyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserCertdocCertverifyApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **verifyId** | **string**| 信息校验验证ID。通过&lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_2/alipay.user.certdoc.certverify.preconsult\&quot;&gt;alipay.user.certdoc.certverify.preconsult&lt;/a&gt;(实名证件信息比对验证预咨询)接口获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `preconsult()`

```php
preconsult($alipayUserCertdocCertverifyPreconsultModel): \Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyPreconsultResponseModel
```

实名证件信息比对验证预咨询

商户在该接口（接口1）预先录入某用户的实名证件信息（例如姓名、身份证号等），获得用户授权后调用咨询接口（接口2），将对比该用户的支付宝实名信息与该（接口1）传入的信息是否一致。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserCertdocCertverifyApi(
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

$alipayUserCertdocCertverifyPreconsultModel = new \Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyPreconsultModel(); // \Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyPreconsultModel

try {
    $result = $apiInstance->preconsult($alipayUserCertdocCertverifyPreconsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserCertdocCertverifyApi->preconsult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserCertdocCertverifyPreconsultModel** | **\Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyPreconsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserCertdocCertverifyPreconsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
