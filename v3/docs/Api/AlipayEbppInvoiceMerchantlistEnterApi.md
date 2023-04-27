# Alipay\OpenAPISDK\AlipayEbppInvoiceMerchantlistEnterApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayEbppInvoiceMerchantlistEnterApi.md#apply) | **POST** /v3/alipay/ebpp/invoice/merchantlist/enter/apply | 商户批量入驻申请接口


## `apply()`

```php
apply($alipayEbppInvoiceMerchantlistEnterApplyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantlistEnterApplyResponseModel
```

商户批量入驻申请接口

针对已经在支付宝入驻的服务方，使用该接口导入服务方后面的开票商户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceMerchantlistEnterApi(
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

$alipayEbppInvoiceMerchantlistEnterApplyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantlistEnterApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantlistEnterApplyModel

try {
    $result = $apiInstance->apply($alipayEbppInvoiceMerchantlistEnterApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceMerchantlistEnterApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceMerchantlistEnterApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantlistEnterApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceMerchantlistEnterApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
