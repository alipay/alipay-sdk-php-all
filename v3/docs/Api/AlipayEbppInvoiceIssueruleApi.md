# Alipay\OpenAPISDK\AlipayEbppInvoiceIssueruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceIssueruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/issuerule/create | 新增发放规则
[**delete()**](AlipayEbppInvoiceIssueruleApi.md#delete) | **POST** /v3/alipay/ebpp/invoice/issuerule/delete | 删除发放规则
[**modify()**](AlipayEbppInvoiceIssueruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/issuerule/modify | 编辑发放规则


## `create()`

```php
create($alipayEbppInvoiceIssueruleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleCreateResponseModel
```

新增发放规则

新增发放规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceIssueruleApi(
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

$alipayEbppInvoiceIssueruleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceIssueruleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceIssueruleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceIssueruleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayEbppInvoiceIssueruleDeleteModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleDeleteResponseModel
```

删除发放规则

删除发放规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceIssueruleApi(
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

$alipayEbppInvoiceIssueruleDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleDeleteModel

try {
    $result = $apiInstance->delete($alipayEbppInvoiceIssueruleDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceIssueruleApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceIssueruleDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleDeleteModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceIssueruleModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleModifyResponseModel
```

编辑发放规则

编辑发放规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceIssueruleApi(
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

$alipayEbppInvoiceIssueruleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceIssueruleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceIssueruleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceIssueruleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIssueruleModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
