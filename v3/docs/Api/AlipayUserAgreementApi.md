# Alipay\OpenAPISDK\AlipayUserAgreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**migrate()**](AlipayUserAgreementApi.md#migrate) | **POST** /v3/alipay/user/agreement/migrate | 代扣协议迁移
[**query()**](AlipayUserAgreementApi.md#query) | **GET** /v3/alipay/user/agreement/query | 支付宝个人代扣协议查询接口
[**transfer()**](AlipayUserAgreementApi.md#transfer) | **POST** /v3/alipay/user/agreement/transfer | 协议由普通通用代扣协议产品转移到周期扣协议产品
[**unsign()**](AlipayUserAgreementApi.md#unsign) | **POST** /v3/alipay/user/agreement/unsign | 支付宝个人代扣协议解约接口


## `migrate()`

```php
migrate($alipayUserAgreementMigrateModel): object
```

代扣协议迁移

由商户调用，将商户与用户签署的代扣协议内容进行迁移，包括协议主体迁移等

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementApi(
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

$alipayUserAgreementMigrateModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementMigrateModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementMigrateModel

try {
    $result = $apiInstance->migrate($alipayUserAgreementMigrateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementApi->migrate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementMigrateModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementMigrateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($personalProductCode, $alipayUserId, $alipayOpenId, $alipayLogonId, $signScene, $externalAgreementNo, $thirdPartyType, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayUserAgreementQueryResponseModel
```

支付宝个人代扣协议查询接口

支付宝个人代扣协议查询接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementApi(
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

$personalProductCode = GENERAL_WITHHOLDING_P; // string | 协议产品码，商户和支付宝签约时确定，商户可咨询技术支持。
$alipayUserId = 2088101122675263; // string | 用户的支付宝账号对应 的支付宝唯一用户号，以 2088 开头的 16 位纯数字 组成。 本参数与alipay_logon_id若都填写，则以本参数为准，优先级高于 alipay_logon_id。
$alipayOpenId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 用户的支付宝账号对应 的支付宝唯一用户号， 本参数与alipay_logon_id若都填写，则以本参数为准，优先级高于 alipay_logon_id。
$alipayLogonId = abx@alitest.com; // string | 用户的支付宝登录账号，支持邮箱或手机号码格式。本参数与alipay_open_id 或 alipay_user_id 同时填写，优先按照 alipay_open_id 或 alipay_user_id 处理。
$signScene = INDUSTRY|MEDICAL; // string | 签约场景码，该值需要与系统/页面签约接口调用时传入的值保持一 致。如：周期扣款场景与调用 alipay.user.agreement.page.sign(支付宝个人协议页面签约接口) 签约时的 sign_scene 相同。  注意：当传入商户签约号 external_agreement_no 时，该值不能为空或默认值 DEFAULT|DEFAULT。
$externalAgreementNo = test; // string | 代扣协议中标示用户的唯一签约号(确保在商户系统中 唯一)。 格式规则:支持大写小写字母和数字，最长 32 位。
$thirdPartyType = PARTNER; // string | 签约第三方主体类型。对于三方协议，表示当前用户和哪一类的第三方主体进行签约。 默认为PARTNER。
$agreementNo = 20170322450983769228; // string | 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ） ，如果传了该参数，其他参数会被忽略

try {
    $result = $apiInstance->query($personalProductCode, $alipayUserId, $alipayOpenId, $alipayLogonId, $signScene, $externalAgreementNo, $thirdPartyType, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalProductCode** | **string**| 协议产品码，商户和支付宝签约时确定，商户可咨询技术支持。 | [optional]
 **alipayUserId** | **string**| 用户的支付宝账号对应 的支付宝唯一用户号，以 2088 开头的 16 位纯数字 组成。 本参数与alipay_logon_id若都填写，则以本参数为准，优先级高于 alipay_logon_id。 | [optional]
 **alipayOpenId** | **string**| 用户的支付宝账号对应 的支付宝唯一用户号， 本参数与alipay_logon_id若都填写，则以本参数为准，优先级高于 alipay_logon_id。 | [optional]
 **alipayLogonId** | **string**| 用户的支付宝登录账号，支持邮箱或手机号码格式。本参数与alipay_open_id 或 alipay_user_id 同时填写，优先按照 alipay_open_id 或 alipay_user_id 处理。 | [optional]
 **signScene** | **string**| 签约场景码，该值需要与系统/页面签约接口调用时传入的值保持一 致。如：周期扣款场景与调用 alipay.user.agreement.page.sign(支付宝个人协议页面签约接口) 签约时的 sign_scene 相同。  注意：当传入商户签约号 external_agreement_no 时，该值不能为空或默认值 DEFAULT|DEFAULT。 | [optional]
 **externalAgreementNo** | **string**| 代扣协议中标示用户的唯一签约号(确保在商户系统中 唯一)。 格式规则:支持大写小写字母和数字，最长 32 位。 | [optional]
 **thirdPartyType** | **string**| 签约第三方主体类型。对于三方协议，表示当前用户和哪一类的第三方主体进行签约。 默认为PARTNER。 | [optional]
 **agreementNo** | **string**| 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ） ，如果传了该参数，其他参数会被忽略 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($alipayUserAgreementTransferModel): \Alipay\OpenAPISDK\Model\AlipayUserAgreementTransferResponseModel
```

协议由普通通用代扣协议产品转移到周期扣协议产品

由商户调用，将商户之前通用代扣产品转移到周期扣的协议产品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementApi(
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

$alipayUserAgreementTransferModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementTransferModel

try {
    $result = $apiInstance->transfer($alipayUserAgreementTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserAgreementTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsign()`

```php
unsign($alipayUserAgreementUnsignModel): object
```

支付宝个人代扣协议解约接口

支付宝个人代扣协议解约接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserAgreementApi(
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

$alipayUserAgreementUnsignModel = new \Alipay\OpenAPISDK\Model\AlipayUserAgreementUnsignModel(); // \Alipay\OpenAPISDK\Model\AlipayUserAgreementUnsignModel

try {
    $result = $apiInstance->unsign($alipayUserAgreementUnsignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserAgreementApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserAgreementUnsignModel** | **\Alipay\OpenAPISDK\Model\AlipayUserAgreementUnsignModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
