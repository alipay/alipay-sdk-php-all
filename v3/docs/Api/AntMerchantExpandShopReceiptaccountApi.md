# Alipay\OpenAPISDK\AntMerchantExpandShopReceiptaccountApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**save()**](AntMerchantExpandShopReceiptaccountApi.md#save) | **POST** /v3/ant/merchant/expand/shop/receiptaccount/save | 店铺增加收单账号


## `save()`

```php
save($antMerchantExpandShopReceiptaccountSaveModel): object
```

店铺增加收单账号

店铺增加收单账号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopReceiptaccountApi(
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

$antMerchantExpandShopReceiptaccountSaveModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandShopReceiptaccountSaveModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandShopReceiptaccountSaveModel

try {
    $result = $apiInstance->save($antMerchantExpandShopReceiptaccountSaveModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopReceiptaccountApi->save: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandShopReceiptaccountSaveModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandShopReceiptaccountSaveModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
