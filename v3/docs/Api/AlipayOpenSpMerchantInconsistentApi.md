# Alipay\OpenAPISDK\AlipayOpenSpMerchantInconsistentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approve()**](AlipayOpenSpMerchantInconsistentApi.md#approve) | **POST** /v3/alipay/open/sp/merchant/inconsistent/approve | 非同人商家进件资料审批


## `approve()`

```php
approve($alipayOpenSpMerchantInconsistentApproveModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpMerchantInconsistentApproveResponseModel
```

非同人商家进件资料审批

针对服务优选扫码点餐小程序，用于收集并审核非同人商家的进件资料。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpMerchantInconsistentApi(
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

$alipayOpenSpMerchantInconsistentApproveModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpMerchantInconsistentApproveModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpMerchantInconsistentApproveModel

try {
    $result = $apiInstance->approve($alipayOpenSpMerchantInconsistentApproveModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpMerchantInconsistentApi->approve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpMerchantInconsistentApproveModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpMerchantInconsistentApproveModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpMerchantInconsistentApproveResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
