# Alipay\OpenAPISDK\AlipayEbppInvoiceInstitutionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceInstitutionApi.md#create) | **POST** /v3/alipay/ebpp/invoice/institution/create | 制度新增
[**delete()**](AlipayEbppInvoiceInstitutionApi.md#delete) | **DELETE** /v3/alipay/ebpp/invoice/institution/delete | 制度删除
[**modify()**](AlipayEbppInvoiceInstitutionApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/institution/modify | 制度编辑


## `create()`

```php
create($alipayEbppInvoiceInstitutionCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionCreateResponseModel
```

制度新增

制度新增

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionApi(
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

$alipayEbppInvoiceInstitutionCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceInstitutionCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInstitutionCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($accountId, $agreementNo, $enterpriseId, $institutionId): object
```

制度删除

制度删除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionApi(
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

$accountId = 2088000194958956; // string | 企业共同账户id（条件必填）
$agreementNo = 1234; // string | 授权签约协议号（条件必填）
$enterpriseId = 2088123412341234; // string | 企业id（条件必填）
$institutionId = 2022031000152617000000000001; // string | 制度id

try {
    $result = $apiInstance->delete($accountId, $agreementNo, $enterpriseId, $institutionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业共同账户id（条件必填） | [optional]
 **agreementNo** | **string**| 授权签约协议号（条件必填） | [optional]
 **enterpriseId** | **string**| 企业id（条件必填） | [optional]
 **institutionId** | **string**| 制度id | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceInstitutionModifyModel): object
```

制度编辑

制度编辑

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionApi(
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

$alipayEbppInvoiceInstitutionModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceInstitutionModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInstitutionModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
