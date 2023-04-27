# Alipay\OpenAPISDK\AlipaySocialBaseContentlibStandardcontentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipaySocialBaseContentlibStandardcontentApi.md#batchquery) | **POST** /v3/alipay/social/base/contentlib/standardcontent/batchquery | 内容批量查询接口


## `batchquery()`

```php
batchquery($alipaySocialBaseContentlibStandardcontentBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipaySocialBaseContentlibStandardcontentBatchqueryResponseModel
```

内容批量查询接口

支付宝生活号+查询当前账号下发布过的内容及对应详情信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySocialBaseContentlibStandardcontentApi(
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

$alipaySocialBaseContentlibStandardcontentBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipaySocialBaseContentlibStandardcontentBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipaySocialBaseContentlibStandardcontentBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipaySocialBaseContentlibStandardcontentBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySocialBaseContentlibStandardcontentApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipaySocialBaseContentlibStandardcontentBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipaySocialBaseContentlibStandardcontentBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipaySocialBaseContentlibStandardcontentBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
