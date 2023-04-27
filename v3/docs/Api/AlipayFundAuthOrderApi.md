# Alipay\OpenAPISDK\AlipayFundAuthOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**freeze()**](AlipayFundAuthOrderApi.md#freeze) | **POST** /v3/alipay/fund/auth/order/freeze | 资金授权冻结接口
[**unfreeze()**](AlipayFundAuthOrderApi.md#unfreeze) | **POST** /v3/alipay/fund/auth/order/unfreeze | 资金授权解冻接口


## `freeze()`

```php
freeze($alipayFundAuthOrderFreezeModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderFreezeResponseModel
```

资金授权冻结接口

收银员使用扫码设备读取用户支付宝钱包“付款码”后，将条码信息和订单信息通过本接口上送至支付宝发起资金冻结。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOrderApi(
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

$alipayFundAuthOrderFreezeModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderFreezeModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderFreezeModel

try {
    $result = $apiInstance->freeze($alipayFundAuthOrderFreezeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOrderApi->freeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOrderFreezeModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderFreezeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderFreezeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unfreeze()`

```php
unfreeze($alipayFundAuthOrderUnfreezeModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderUnfreezeResponseModel
```

资金授权解冻接口

当资金授权发生之后一段时间内，由于买家或者商家等其他原因需要要解冻资金，商家可通过资金授权解冻接口将授权资金进行解冻，支付宝将在收到解冻请求并验证成功后，按解冻规则将冻结资金按原路进行解冻

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOrderApi(
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

$alipayFundAuthOrderUnfreezeModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderUnfreezeModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderUnfreezeModel

try {
    $result = $apiInstance->unfreeze($alipayFundAuthOrderUnfreezeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOrderApi->unfreeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOrderUnfreezeModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderUnfreezeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderUnfreezeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
