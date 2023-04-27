# Alipay\OpenAPISDK\AntMerchantExpandItemStatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AntMerchantExpandItemStatusApi.md#modify) | **POST** /v3/ant/merchant/expand/item/status/modify | 商品状态修改接口


## `modify()`

```php
modify($antMerchantExpandItemStatusModifyModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemStatusModifyResponseModel
```

商品状态修改接口

用于服务商或商户修改商品状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemStatusApi(
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

$antMerchantExpandItemStatusModifyModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemStatusModifyModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemStatusModifyModel

try {
    $result = $apiInstance->modify($antMerchantExpandItemStatusModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemStatusApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemStatusModifyModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemStatusModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemStatusModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
