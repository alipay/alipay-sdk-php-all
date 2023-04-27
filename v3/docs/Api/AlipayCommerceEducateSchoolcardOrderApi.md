# Alipay\OpenAPISDK\AlipayCommerceEducateSchoolcardOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayCommerceEducateSchoolcardOrderApi.md#sync) | **POST** /v3/alipay/commerce/educate/schoolcard/order/sync | 校园卡支付订单数据同步


## `sync()`

```php
sync($alipayCommerceEducateSchoolcardOrderSyncModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEducateSchoolcardOrderSyncResponseModel
```

校园卡支付订单数据同步

校园卡支付订单数据同步

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEducateSchoolcardOrderApi(
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

$alipayCommerceEducateSchoolcardOrderSyncModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEducateSchoolcardOrderSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEducateSchoolcardOrderSyncModel

try {
    $result = $apiInstance->sync($alipayCommerceEducateSchoolcardOrderSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEducateSchoolcardOrderApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEducateSchoolcardOrderSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEducateSchoolcardOrderSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEducateSchoolcardOrderSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
