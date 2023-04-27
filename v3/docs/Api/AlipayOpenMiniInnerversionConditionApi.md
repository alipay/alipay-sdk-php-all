# Alipay\OpenAPISDK\AlipayOpenMiniInnerversionConditionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenMiniInnerversionConditionApi.md#batchquery) | **POST** /v3/alipay/open/mini/innerversion/condition/batchquery | 根据状态批量查询版本信息


## `batchquery()`

```php
batchquery($alipayOpenMiniInnerversionConditionBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionConditionBatchqueryResponseModel
```

根据状态批量查询版本信息

小程序提供一套针对一二方场景的开发者提供一套统一的内部能力开放体系，定向输出赋能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerversionConditionApi(
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

$alipayOpenMiniInnerversionConditionBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionConditionBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionConditionBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenMiniInnerversionConditionBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerversionConditionApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerversionConditionBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionConditionBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerversionConditionBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
