# Alipay\OpenAPISDK\ZhimaCreditPayafteruseCreditagreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaCreditPayafteruseCreditagreementApi.md#query) | **GET** /v3/zhima/credit/payafteruse/creditagreement/query | 查询服务开通/授权信息
[**transfer()**](ZhimaCreditPayafteruseCreditagreementApi.md#transfer) | **POST** /v3/zhima/credit/payafteruse/creditagreement/transfer | 转换为芝麻先享


## `query()`

```php
query($outAgreementNo, $creditAgreementId): \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementQueryResponseModel
```

查询服务开通/授权信息

使用商户外部协议号或开通/授权协议号，查询服务开通/授权信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPayafteruseCreditagreementApi(
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

$outAgreementNo = 2014070700166653; // string | 商户外部协议号
$creditAgreementId = ZMOP2020050722001440; // string | 芝麻开通/授权协议号，out_agreement_no与credit_agreement_id必填一个，推荐使用credit_agreement_id。

try {
    $result = $apiInstance->query($outAgreementNo, $creditAgreementId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPayafteruseCreditagreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outAgreementNo** | **string**| 商户外部协议号 | [optional]
 **creditAgreementId** | **string**| 芝麻开通/授权协议号，out_agreement_no与credit_agreement_id必填一个，推荐使用credit_agreement_id。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($zhimaCreditPayafteruseCreditagreementTransferModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementTransferResponseModel
```

转换为芝麻先享

其他产品功能（例如信用代扣），通过该接口，可以转换为芝麻先享

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPayafteruseCreditagreementApi(
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

$zhimaCreditPayafteruseCreditagreementTransferModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementTransferModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementTransferModel

try {
    $result = $apiInstance->transfer($zhimaCreditPayafteruseCreditagreementTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPayafteruseCreditagreementApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPayafteruseCreditagreementTransferModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditagreementTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
