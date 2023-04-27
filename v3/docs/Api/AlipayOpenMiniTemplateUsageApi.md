# Alipay\OpenAPISDK\AlipayOpenMiniTemplateUsageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniTemplateUsageApi.md#query) | **GET** /v3/alipay/open/mini/template/usage/query | 查询使用模板的小程序列表


## `query()`

```php
query($templateId, $pageNum, $pageSize, $templateVersion, $bundleId): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplateUsageQueryResponseModel
```

查询使用模板的小程序列表

查询使用模板的小程序列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTemplateUsageApi(
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

$templateId = 1; // string | 小程序模板APPID
$pageNum = 1; // int | 查询的页数，起始为 1（第一页） 。默认第一页。
$pageSize = 10; // int | 每页的数量，最多查询50个，默认查询10个
$templateVersion = 0.0.1; // string | 模板小程序的版本号
$bundleId = com.alipay.alipaywallet; // string | 小程序投放的端参数，例如投放到支付宝钱包是支付宝端。默认支付宝端。支持： com.alipay.alipaywallet:支付宝端； com.alipay.iot.xpaas：支付宝IoT端。

try {
    $result = $apiInstance->query($templateId, $pageNum, $pageSize, $templateVersion, $bundleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTemplateUsageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 小程序模板APPID | [optional]
 **pageNum** | **int**| 查询的页数，起始为 1（第一页） 。默认第一页。 | [optional]
 **pageSize** | **int**| 每页的数量，最多查询50个，默认查询10个 | [optional]
 **templateVersion** | **string**| 模板小程序的版本号 | [optional]
 **bundleId** | **string**| 小程序投放的端参数，例如投放到支付宝钱包是支付宝端。默认支付宝端。支持： com.alipay.alipaywallet:支付宝端； com.alipay.iot.xpaas：支付宝IoT端。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplateUsageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
