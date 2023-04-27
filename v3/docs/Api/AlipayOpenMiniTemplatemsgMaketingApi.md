# Alipay\OpenAPISDK\AlipayOpenMiniTemplatemsgMaketingApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenMiniTemplatemsgMaketingApi.md#batchquery) | **POST** /v3/alipay/open/mini/templatemsg/maketing/batchquery | 小程序模板消息营销投放详情分页批量查询


## `batchquery()`

```php
batchquery($alipayOpenMiniTemplatemsgMaketingBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingBatchqueryResponseModel
```

小程序模板消息营销投放详情分页批量查询

小程序模板消息营销投放详情分页批量查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTemplatemsgMaketingApi(
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

$alipayOpenMiniTemplatemsgMaketingBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenMiniTemplatemsgMaketingBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTemplatemsgMaketingApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTemplatemsgMaketingBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
