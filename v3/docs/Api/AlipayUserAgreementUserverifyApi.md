# Alipay\OpenAPISDK\AlipayUserAgreementUserverifyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayUserAgreementUserverifyApi.md#apply) | **POST** /v3/alipay/user/agreement/userverify/apply | 协议用户一致性验证
[**query()**](AlipayUserAgreementUserverifyApi.md#query) | **GET** /v3/alipay/user/agreement/userverify/query | 用户协议鉴权查询结果


## `apply()`

```php
apply($alipayUserAgreementUserverifyApplyModel): \Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyApplyResponseModel
```

协议用户一致性验证

验证协议对应的用户信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementUserverifyApi(
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

$alipayUserAgreementUserverifyApplyModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyApplyModel

try {
    $result = $apiInstance->apply($alipayUserAgreementUserverifyApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementUserverifyApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementUserverifyApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($agreementNo, $applyToken): \Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyQueryResponseModel
```

用户协议鉴权查询结果

商户使用用户验证申请接口时，获取token，然后通过次接口回去验证状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementUserverifyApi(
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

$agreementNo = 20170502000610755993; // string | 协议号
$applyToken = MDEDUCT0068292ca377d1d44b65fa24ec9cd89132f; // string | 申请时获取的token

try {
    $result = $apiInstance->query($agreementNo, $applyToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementUserverifyApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementNo** | **string**| 协议号 | [optional]
 **applyToken** | **string**| 申请时获取的token | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementUserverifyQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
