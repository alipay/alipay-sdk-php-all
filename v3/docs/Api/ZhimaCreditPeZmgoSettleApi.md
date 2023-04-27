# Alipay\OpenAPISDK\ZhimaCreditPeZmgoSettleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](ZhimaCreditPeZmgoSettleApi.md#apply) | **POST** /v3/zhima/credit/pe/zmgo/settle/apply | 芝麻GO结算申请
[**refund()**](ZhimaCreditPeZmgoSettleApi.md#refund) | **POST** /v3/zhima/credit/pe/zmgo/settle/refund | 芝麻GO结算退款接口
[**unfreeze()**](ZhimaCreditPeZmgoSettleApi.md#unfreeze) | **PUT** /v3/zhima/credit/pe/zmgo/settle/unfreeze | 芝麻GO解冻接口


## `apply()`

```php
apply($zhimaCreditPeZmgoSettleApplyModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleApplyResponseModel
```

芝麻GO结算申请

用户已经开通芝麻GO后，商户通过此接口解冻转支付用户冻结金额。传入金额必须小于等于冻结金额

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoSettleApi(
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

$zhimaCreditPeZmgoSettleApplyModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleApplyModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleApplyModel

try {
    $result = $apiInstance->apply($zhimaCreditPeZmgoSettleApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoSettleApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoSettleApplyModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($zhimaCreditPeZmgoSettleRefundModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleRefundResponseModel
```

芝麻GO结算退款接口

芝麻GO结算金额逆向退款接口: 对zhima.credit.pe.zmgo.settle.apply(芝麻GO结算申请接口) 产生的结算交易发起退款操作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoSettleApi(
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

$zhimaCreditPeZmgoSettleRefundModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleRefundModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleRefundModel

try {
    $result = $apiInstance->refund($zhimaCreditPeZmgoSettleRefundModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoSettleApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoSettleRefundModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleRefundModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleRefundResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unfreeze()`

```php
unfreeze($zhimaCreditPeZmgoSettleUnfreezeModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleUnfreezeResponseModel
```

芝麻GO解冻接口

用户已经开通芝麻GO后，商户通过此接口解冻转支付用户冻结金额。传入金额必须小于等于冻结金额

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPeZmgoSettleApi(
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

$zhimaCreditPeZmgoSettleUnfreezeModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleUnfreezeModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleUnfreezeModel

try {
    $result = $apiInstance->unfreeze($zhimaCreditPeZmgoSettleUnfreezeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPeZmgoSettleApi->unfreeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPeZmgoSettleUnfreezeModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleUnfreezeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPeZmgoSettleUnfreezeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
