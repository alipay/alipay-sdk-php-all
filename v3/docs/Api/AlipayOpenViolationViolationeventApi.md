# Alipay\OpenAPISDK\AlipayOpenViolationViolationeventApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenViolationViolationeventApi.md#batchquery) | **POST** /v3/alipay/open/violation/violationevent/batchquery | 违规记录列表查询


## `batchquery()`

```php
batchquery($alipayOpenViolationViolationeventBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationeventBatchqueryResponseModel
```

违规记录列表查询

违规记录列表查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenViolationViolationeventApi(
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

$alipayOpenViolationViolationeventBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationeventBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationeventBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenViolationViolationeventBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenViolationViolationeventApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenViolationViolationeventBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationeventBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationeventBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
