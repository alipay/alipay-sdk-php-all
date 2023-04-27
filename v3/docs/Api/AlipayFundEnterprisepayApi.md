# Alipay\OpenAPISDK\AlipayFundEnterprisepayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sign()**](AlipayFundEnterprisepayApi.md#sign) | **POST** /v3/alipay/fund/enterprisepay/sign | 因公付企业签约
[**unsign()**](AlipayFundEnterprisepayApi.md#unsign) | **POST** /v3/alipay/fund/enterprisepay/unsign | 因公付企业解约


## `sign()`

```php
sign($alipayFundEnterprisepaySignModel): \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepaySignResponseModel
```

因公付企业签约

用于获取因公付企业签约链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayApi(
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

$alipayFundEnterprisepaySignModel = new \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepaySignModel(); // \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepaySignModel

try {
    $result = $apiInstance->sign($alipayFundEnterprisepaySignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundEnterprisepaySignModel** | **\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepaySignModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepaySignResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsign()`

```php
unsign($alipayFundEnterprisepayUnsignModel): \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayUnsignResponseModel
```

因公付企业解约

用于因公付企业解约时获取解约链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayApi(
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

$alipayFundEnterprisepayUnsignModel = new \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayUnsignModel(); // \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayUnsignModel

try {
    $result = $apiInstance->unsign($alipayFundEnterprisepayUnsignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundEnterprisepayUnsignModel** | **\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayUnsignModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayUnsignResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
