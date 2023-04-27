# Alipay\OpenAPISDK\AlipayEbppInvoiceIsvtokenReimApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayEbppInvoiceIsvtokenReimApi.md#apply) | **POST** /v3/alipay/ebpp/invoice/isvtoken/reim/apply | 获取报销授权令牌


## `apply()`

```php
apply($alipayEbppInvoiceIsvtokenReimApplyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIsvtokenReimApplyResponseModel
```

获取报销授权令牌

当报销软件跳转支付宝报销助手，需要通过授权令牌进行身份认证，该接口用于ISV获取报销助手的授权令牌

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceIsvtokenReimApi(
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

$alipayEbppInvoiceIsvtokenReimApplyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIsvtokenReimApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIsvtokenReimApplyModel

try {
    $result = $apiInstance->apply($alipayEbppInvoiceIsvtokenReimApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceIsvtokenReimApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceIsvtokenReimApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIsvtokenReimApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceIsvtokenReimApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
