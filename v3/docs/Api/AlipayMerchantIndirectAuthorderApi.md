# Alipay\OpenAPISDK\AlipayMerchantIndirectAuthorderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**close()**](AlipayMerchantIndirectAuthorderApi.md#close) | **PUT** /v3/alipay/merchant/indirect/authorder/close | 商家认证申请单撤销
[**create()**](AlipayMerchantIndirectAuthorderApi.md#create) | **POST** /v3/alipay/merchant/indirect/authorder/create | 商家认证申请单提交
[**querystatus()**](AlipayMerchantIndirectAuthorderApi.md#querystatus) | **POST** /v3/alipay/merchant/indirect/authorder/querystatus | 查询商家认证申请单状态


## `close()`

```php
close($alipayMerchantIndirectAuthorderCloseModel): object
```

商家认证申请单撤销

申请单处于审核中、审核失败、待确认等状态时，申请单可撤销，撤销后可重新调用提交申请单接口上传申请单信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIndirectAuthorderApi(
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

$alipayMerchantIndirectAuthorderCloseModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCloseModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCloseModel

try {
    $result = $apiInstance->close($alipayMerchantIndirectAuthorderCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIndirectAuthorderApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantIndirectAuthorderCloseModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCloseModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayMerchantIndirectAuthorderCreateModel): \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCreateResponseModel
```

商家认证申请单提交

间连商户认证申请单提交，用于支付宝间连商家认证

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIndirectAuthorderApi(
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

$alipayMerchantIndirectAuthorderCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCreateModel

try {
    $result = $apiInstance->create($alipayMerchantIndirectAuthorderCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIndirectAuthorderApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantIndirectAuthorderCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `querystatus()`

```php
querystatus($alipayMerchantIndirectAuthorderQuerystatusModel): \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderQuerystatusResponseModel
```

查询商家认证申请单状态

查询商家认证申请单状态，以及失败原因

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIndirectAuthorderApi(
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

$alipayMerchantIndirectAuthorderQuerystatusModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderQuerystatusModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderQuerystatusModel

try {
    $result = $apiInstance->querystatus($alipayMerchantIndirectAuthorderQuerystatusModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIndirectAuthorderApi->querystatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantIndirectAuthorderQuerystatusModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderQuerystatusModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantIndirectAuthorderQuerystatusResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
