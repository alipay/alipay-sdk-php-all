# Alipay\OpenAPISDK\AlipayOpenPublicSinglearticleDataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenPublicSinglearticleDataApi.md#batchquery) | **POST** /v3/alipay/open/public/singlearticle/data/batchquery | 图文分析-按文章查询数据接口


## `batchquery()`

```php
batchquery($alipayOpenPublicSinglearticleDataBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicSinglearticleDataBatchqueryResponseModel
```

图文分析-按文章查询数据接口

开发者可以通过本接口查询最近30天内发布的图文消息的数据，数据包括：发布时间、送达人数、阅读人数、分享人数等。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicSinglearticleDataApi(
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

$alipayOpenPublicSinglearticleDataBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicSinglearticleDataBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicSinglearticleDataBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenPublicSinglearticleDataBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicSinglearticleDataApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicSinglearticleDataBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicSinglearticleDataBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicSinglearticleDataBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
