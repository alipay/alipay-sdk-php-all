# Alipay\OpenAPISDK\AlipayCommerceCityfacilitatorVoucherApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayCommerceCityfacilitatorVoucherApi.md#batchquery) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/batchquery | 地铁购票订单批量查询
[**generate()**](AlipayCommerceCityfacilitatorVoucherApi.md#generate) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/generate | 地铁购票核销码发码
[**refund()**](AlipayCommerceCityfacilitatorVoucherApi.md#refund) | **POST** /v3/alipay/commerce/cityfacilitator/voucher/refund | 地铁购票发码退款


## `batchquery()`

```php
batchquery($alipayCommerceCityfacilitatorVoucherBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherBatchqueryResponseModel
```

地铁购票订单批量查询

商户APP调该接口批量查询订单状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceCityfacilitatorVoucherApi(
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

$alipayCommerceCityfacilitatorVoucherBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayCommerceCityfacilitatorVoucherBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceCityfacilitatorVoucherApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceCityfacilitatorVoucherBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `generate()`

```php
generate($alipayCommerceCityfacilitatorVoucherGenerateModel): \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherGenerateResponseModel
```

地铁购票核销码发码

商户APP调快捷支付付款后，获取地铁购票的核销码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceCityfacilitatorVoucherApi(
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

$alipayCommerceCityfacilitatorVoucherGenerateModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherGenerateModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherGenerateModel

try {
    $result = $apiInstance->generate($alipayCommerceCityfacilitatorVoucherGenerateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceCityfacilitatorVoucherApi->generate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceCityfacilitatorVoucherGenerateModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherGenerateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherGenerateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($alipayCommerceCityfacilitatorVoucherRefundModel): object
```

地铁购票发码退款

地铁购票，商户发码后，调该接口从中间户退款

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceCityfacilitatorVoucherApi(
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

$alipayCommerceCityfacilitatorVoucherRefundModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherRefundModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherRefundModel

try {
    $result = $apiInstance->refund($alipayCommerceCityfacilitatorVoucherRefundModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceCityfacilitatorVoucherApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceCityfacilitatorVoucherRefundModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceCityfacilitatorVoucherRefundModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
