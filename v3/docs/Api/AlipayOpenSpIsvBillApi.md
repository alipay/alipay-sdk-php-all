# Alipay\OpenAPISDK\AlipayOpenSpIsvBillApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayOpenSpIsvBillApi.md#sync) | **POST** /v3/alipay/open/sp/isv/bill/sync | 服务商账单数据回传


## `sync()`

```php
sync($alipayOpenSpIsvBillSyncModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvBillSyncResponseModel
```

服务商账单数据回传

针对SSB业务中，S1回传S2推广过程中，获得的分佣账单数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpIsvBillApi(
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

$alipayOpenSpIsvBillSyncModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvBillSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvBillSyncModel

try {
    $result = $apiInstance->sync($alipayOpenSpIsvBillSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpIsvBillApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpIsvBillSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvBillSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvBillSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)