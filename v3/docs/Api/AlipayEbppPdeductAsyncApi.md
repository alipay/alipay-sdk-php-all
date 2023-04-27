# Alipay\OpenAPISDK\AlipayEbppPdeductAsyncApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**pay()**](AlipayEbppPdeductAsyncApi.md#pay) | **POST** /v3/alipay/ebpp/pdeduct/async/pay | 公共事业缴费直连代扣异步扣款支付接口


## `pay()`

```php
pay($alipayEbppPdeductAsyncPayModel): \Alipay\OpenAPISDK\Model\AlipayEbppPdeductAsyncPayResponseModel
```

公共事业缴费直连代扣异步扣款支付接口

直连代扣机构根据用户个人签约协议，按期按账单请求从用户账户扣款的接口。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductAsyncApi(
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

$alipayEbppPdeductAsyncPayModel = new \Alipay\OpenAPISDK\Model\AlipayEbppPdeductAsyncPayModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppPdeductAsyncPayModel

try {
    $result = $apiInstance->pay($alipayEbppPdeductAsyncPayModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductAsyncApi->pay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppPdeductAsyncPayModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppPdeductAsyncPayModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppPdeductAsyncPayResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
