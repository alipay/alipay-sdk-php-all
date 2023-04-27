# Alipay\OpenAPISDK\AlipayFundAuthOrderVoucherApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayFundAuthOrderVoucherApi.md#create) | **POST** /v3/alipay/fund/auth/order/voucher/create | 资金授权发码接口


## `create()`

```php
create($alipayFundAuthOrderVoucherCreateModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderVoucherCreateResponseModel
```

资金授权发码接口

收银员通过收银台或商户后台调用支付宝接口，生成二维码后，展示给用户，由用户扫描二维码完成资金冻结。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOrderVoucherApi(
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

$alipayFundAuthOrderVoucherCreateModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderVoucherCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOrderVoucherCreateModel

try {
    $result = $apiInstance->create($alipayFundAuthOrderVoucherCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOrderVoucherApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOrderVoucherCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderVoucherCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOrderVoucherCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
