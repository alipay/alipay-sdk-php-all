# Alipay\OpenAPISDK\AlipayEbppInvoiceAuthApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sign()**](AlipayEbppInvoiceAuthApi.md#sign) | **POST** /v3/alipay/ebpp/invoice/auth/sign | 发票授权关系签约
[**unsign()**](AlipayEbppInvoiceAuthApi.md#unsign) | **POST** /v3/alipay/ebpp/invoice/auth/unsign | 发票授权关系解约


## `sign()`

```php
sign($alipayEbppInvoiceAuthSignModel): object
```

发票授权关系签约

用户在ISV端签约了发票相关的授权关系之后，ISV使用该接口将授权关系同步到发票管家。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceAuthApi(
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

$alipayEbppInvoiceAuthSignModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthSignModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthSignModel

try {
    $result = $apiInstance->sign($alipayEbppInvoiceAuthSignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceAuthApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceAuthSignModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthSignModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsign()`

```php
unsign($alipayEbppInvoiceAuthUnsignModel): object
```

发票授权关系解约

用户在ISV端解约了发票相关的授权关系之后，ISV使用该接口将授权关系在发票管家端解约。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceAuthApi(
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

$alipayEbppInvoiceAuthUnsignModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthUnsignModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthUnsignModel

try {
    $result = $apiInstance->unsign($alipayEbppInvoiceAuthUnsignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceAuthApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceAuthUnsignModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceAuthUnsignModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
