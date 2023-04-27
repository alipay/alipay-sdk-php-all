# Alipay\OpenAPISDK\AlipayOpenMiniWidgetDataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](AlipayOpenMiniWidgetDataApi.md#sync) | **POST** /v3/alipay/open/mini/widget/data/sync | 小程序橱窗数据同步


## `sync()`

```php
sync($alipayOpenMiniWidgetDataSyncModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetDataSyncResponseModel
```

小程序橱窗数据同步

面向商品售卖类的小程序橱窗，提供的橱窗内展示数据同步能力，同步后会进行文本和图片信息审核，审核完成后通知结果通过openmq消息通知

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniWidgetDataApi(
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

$alipayOpenMiniWidgetDataSyncModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetDataSyncModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetDataSyncModel

try {
    $result = $apiInstance->sync($alipayOpenMiniWidgetDataSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniWidgetDataApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniWidgetDataSyncModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetDataSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetDataSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
