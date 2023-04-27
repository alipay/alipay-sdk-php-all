# Alipay\OpenAPISDK\AlipayEbppInvoiceInstitutionExpenseruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceInstitutionExpenseruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/create | 创建费控使用规则
[**delete()**](AlipayEbppInvoiceInstitutionExpenseruleApi.md#delete) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/delete | 删除使用规则
[**modify()**](AlipayEbppInvoiceInstitutionExpenseruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/institution/expenserule/modify | 编辑使用规则


## `create()`

```php
create($alipayEbppInvoiceInstitutionExpenseruleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleCreateResponseModel
```

创建费控使用规则

创建费控使用规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionExpenseruleApi(
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

$alipayEbppInvoiceInstitutionExpenseruleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceInstitutionExpenseruleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionExpenseruleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInstitutionExpenseruleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayEbppInvoiceInstitutionExpenseruleDeleteModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleDeleteResponseModel
```

删除使用规则

删除制度下使用规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionExpenseruleApi(
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

$alipayEbppInvoiceInstitutionExpenseruleDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleDeleteModel

try {
    $result = $apiInstance->delete($alipayEbppInvoiceInstitutionExpenseruleDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionExpenseruleApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInstitutionExpenseruleDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleDeleteModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceInstitutionExpenseruleModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleModifyResponseModel
```

编辑使用规则

编辑制度下的使用规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceInstitutionExpenseruleApi(
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

$alipayEbppInvoiceInstitutionExpenseruleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceInstitutionExpenseruleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceInstitutionExpenseruleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceInstitutionExpenseruleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceInstitutionExpenseruleModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
