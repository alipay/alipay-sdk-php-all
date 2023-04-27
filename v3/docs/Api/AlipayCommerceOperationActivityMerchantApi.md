# Alipay\OpenAPISDK\AlipayCommerceOperationActivityMerchantApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayCommerceOperationActivityMerchantApi.md#modify) | **POST** /v3/alipay/commerce/operation/activity/merchant/modify | 商户签约信息修改
[**sign()**](AlipayCommerceOperationActivityMerchantApi.md#sign) | **POST** /v3/alipay/commerce/operation/activity/merchant/sign | 商户签约活动
[**unsign()**](AlipayCommerceOperationActivityMerchantApi.md#unsign) | **POST** /v3/alipay/commerce/operation/activity/merchant/unsign | 活动商户解约


## `modify()`

```php
modify($alipayCommerceOperationActivityMerchantModifyModel): object
```

商户签约信息修改

商户签约信息修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceOperationActivityMerchantApi(
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

$alipayCommerceOperationActivityMerchantModifyModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantModifyModel

try {
    $result = $apiInstance->modify($alipayCommerceOperationActivityMerchantModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceOperationActivityMerchantApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceOperationActivityMerchantModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `sign()`

```php
sign($alipayCommerceOperationActivityMerchantSignModel): object
```

商户签约活动

商户签约活动

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceOperationActivityMerchantApi(
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

$alipayCommerceOperationActivityMerchantSignModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantSignModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantSignModel

try {
    $result = $apiInstance->sign($alipayCommerceOperationActivityMerchantSignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceOperationActivityMerchantApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceOperationActivityMerchantSignModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceOperationActivityMerchantSignModel**|  | [optional]

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
unsign(): object
```

活动商户解约

用户银行商户模式商户解约活动使用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceOperationActivityMerchantApi(
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


try {
    $result = $apiInstance->unsign();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceOperationActivityMerchantApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
