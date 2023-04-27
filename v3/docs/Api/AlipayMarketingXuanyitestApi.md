# Alipay\OpenAPISDK\AlipayMarketingXuanyitestApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer()**](AlipayMarketingXuanyitestApi.md#transfer) | **POST** /v3/alipay/marketing/xuanyitest/transfer | 资源化测试4.0


## `transfer()`

```php
transfer($alipayMarketingXuanyitestTransferModel): \Alipay\OpenAPISDK\Model\AlipayMarketingXuanyitestTransferResponseModel
```

资源化测试4.0

功能测试

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingXuanyitestApi(
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

$alipayMarketingXuanyitestTransferModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingXuanyitestTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingXuanyitestTransferModel

try {
    $result = $apiInstance->transfer($alipayMarketingXuanyitestTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingXuanyitestApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingXuanyitestTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingXuanyitestTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingXuanyitestTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
