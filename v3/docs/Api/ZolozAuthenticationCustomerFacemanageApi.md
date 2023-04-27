# Alipay\OpenAPISDK\ZolozAuthenticationCustomerFacemanageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](ZolozAuthenticationCustomerFacemanageApi.md#create) | **POST** /v3/zoloz/authentication/customer/facemanage/create | 热脸入库
[**delete()**](ZolozAuthenticationCustomerFacemanageApi.md#delete) | **POST** /v3/zoloz/authentication/customer/facemanage/delete | 热脸出库


## `create()`

```php
create($zolozAuthenticationCustomerFacemanageCreateModel): \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageCreateResponseModel
```

热脸入库

热脸入库

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZolozAuthenticationCustomerFacemanageApi(
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

$zolozAuthenticationCustomerFacemanageCreateModel = new \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageCreateModel(); // \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageCreateModel

try {
    $result = $apiInstance->create($zolozAuthenticationCustomerFacemanageCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZolozAuthenticationCustomerFacemanageApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zolozAuthenticationCustomerFacemanageCreateModel** | **\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($zolozAuthenticationCustomerFacemanageDeleteModel): \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageDeleteResponseModel
```

热脸出库

出库逻辑

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZolozAuthenticationCustomerFacemanageApi(
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

$zolozAuthenticationCustomerFacemanageDeleteModel = new \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageDeleteModel(); // \Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageDeleteModel

try {
    $result = $apiInstance->delete($zolozAuthenticationCustomerFacemanageDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZolozAuthenticationCustomerFacemanageApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zolozAuthenticationCustomerFacemanageDeleteModel** | **\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageDeleteModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZolozAuthenticationCustomerFacemanageDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
