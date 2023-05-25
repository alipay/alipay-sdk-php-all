# Alipay\OpenAPISDK\AlipayTradeBatchApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**settle()**](AlipayTradeBatchApi.md#settle) | **POST** /v3/alipay/trade/batch/settle | 批量结算
[**transfer()**](AlipayTradeBatchApi.md#transfer) | **POST** /v3/alipay/trade/batch/transfer | 请款分账


## `settle()`

```php
settle($alipayTradeBatchSettleModel): \Alipay\OpenAPISDK\Model\AlipayTradeBatchSettleResponseModel
```

批量结算

买家付款成功之后，资金进入二级商户待结算户，支付宝等待平台的结算指令进行结算。平台可根据平台规则，发起批量结算请求，将资金结算到二级商户的结算账号。请款金额只要不超过待结算的总余额即可。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeBatchApi(
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

$alipayTradeBatchSettleModel = new \Alipay\OpenAPISDK\Model\AlipayTradeBatchSettleModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeBatchSettleModel

try {
    $result = $apiInstance->settle($alipayTradeBatchSettleModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeBatchApi->settle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeBatchSettleModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeBatchSettleModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeBatchSettleResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `transfer()`

```php
transfer($alipayTradeBatchTransferModel): \Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferResponseModel
```

请款分账

在红星美凯龙场景下，请款到不同主体的银行卡/账户中

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeBatchApi(
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

$alipayTradeBatchTransferModel = new \Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferModel

try {
    $result = $apiInstance->transfer($alipayTradeBatchTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeBatchApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeBatchTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
