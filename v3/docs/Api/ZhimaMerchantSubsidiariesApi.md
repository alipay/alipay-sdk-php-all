# Alipay\OpenAPISDK\ZhimaMerchantSubsidiariesApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](ZhimaMerchantSubsidiariesApi.md#apply) | **POST** /v3/zhima/merchant/subsidiaries/apply | 子商户信息添加
[**close()**](ZhimaMerchantSubsidiariesApi.md#close) | **POST** /v3/zhima/merchant/subsidiaries/close | 关闭子商户信息工单


## `apply()`

```php
apply($zhimaMerchantSubsidiariesApplyModel): \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesApplyResponseModel
```

子商户信息添加

子商户信息添加

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantSubsidiariesApi(
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

$zhimaMerchantSubsidiariesApplyModel = new \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesApplyModel(); // \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesApplyModel

try {
    $result = $apiInstance->apply($zhimaMerchantSubsidiariesApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantSubsidiariesApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaMerchantSubsidiariesApplyModel** | **\Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `close()`

```php
close($zhimaMerchantSubsidiariesCloseModel): \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesCloseResponseModel
```

关闭子商户信息工单

关闭子商户信息工单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantSubsidiariesApi(
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

$zhimaMerchantSubsidiariesCloseModel = new \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesCloseModel(); // \Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesCloseModel

try {
    $result = $apiInstance->close($zhimaMerchantSubsidiariesCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantSubsidiariesApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaMerchantSubsidiariesCloseModel** | **\Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesCloseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantSubsidiariesCloseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
