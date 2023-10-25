# Alipay\OpenAPISDK\ZhimaCreditPayafteruseCreditbizorderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**finish()**](ZhimaCreditPayafteruseCreditbizorderApi.md#finish) | **POST** /v3/zhima/credit/payafteruse/creditbizorder/finish | 结束信用服务订单
[**order()**](ZhimaCreditPayafteruseCreditbizorderApi.md#order) | **POST** /v3/zhima/credit/payafteruse/creditbizorder/order | 芝麻信用服务下单（免用户确认场景）
[**query()**](ZhimaCreditPayafteruseCreditbizorderApi.md#query) | **GET** /v3/zhima/credit/payafteruse/creditbizorder/query | 信用服务订单查询


## `finish()`

```php
finish($zhimaCreditPayafteruseCreditbizorderFinishModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderFinishResponseModel
```

结束信用服务订单

结束信用服务订单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPayafteruseCreditbizorderApi(
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

$zhimaCreditPayafteruseCreditbizorderFinishModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderFinishModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderFinishModel

try {
    $result = $apiInstance->finish($zhimaCreditPayafteruseCreditbizorderFinishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPayafteruseCreditbizorderApi->finish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPayafteruseCreditbizorderFinishModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderFinishModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderFinishResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `order()`

```php
order($zhimaCreditPayafteruseCreditbizorderOrderModel): \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderOrderResponseModel
```

芝麻信用服务下单（免用户确认场景）

芝麻信用产品免密下单，不需要唤起支付宝APP，通过服务端调用完成下单。 涉及芝麻信用服务产品、芝麻风险评估产品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPayafteruseCreditbizorderApi(
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

$zhimaCreditPayafteruseCreditbizorderOrderModel = new \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderOrderModel(); // \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderOrderModel

try {
    $result = $apiInstance->order($zhimaCreditPayafteruseCreditbizorderOrderModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPayafteruseCreditbizorderApi->order: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCreditPayafteruseCreditbizorderOrderModel** | **\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderOrderModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderOrderResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($creditBizOrderId, $outOrderNo): \Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderQueryResponseModel
```

信用服务订单查询

信用服务订单查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCreditPayafteruseCreditbizorderApi(
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

$creditBizOrderId = ZMCB20201021200102012; // string | 信用服务订单号，out_order_no与credit_biz_order_id至少传一个
$outOrderNo = 20202010212001384; // string | 商户外部单号，out_order_no与credit_biz_order_id至少传一个

try {
    $result = $apiInstance->query($creditBizOrderId, $outOrderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCreditPayafteruseCreditbizorderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **creditBizOrderId** | **string**| 信用服务订单号，out_order_no与credit_biz_order_id至少传一个 | [optional]
 **outOrderNo** | **string**| 商户外部单号，out_order_no与credit_biz_order_id至少传一个 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCreditPayafteruseCreditbizorderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
