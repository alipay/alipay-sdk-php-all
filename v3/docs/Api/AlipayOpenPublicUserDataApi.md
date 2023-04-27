# Alipay\OpenAPISDK\AlipayOpenPublicUserDataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenPublicUserDataApi.md#batchquery) | **POST** /v3/alipay/open/public/user/data/batchquery | 用户分析数据查询接口


## `batchquery()`

```php
batchquery($alipayOpenPublicUserDataBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicUserDataBatchqueryResponseModel
```

用户分析数据查询接口

通过此接口，开发者可以根据时间查询30天内的关注用户人数、取消关注用户人数、净增关注人数、累计关注人数信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicUserDataApi(
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

$alipayOpenPublicUserDataBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicUserDataBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicUserDataBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenPublicUserDataBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicUserDataApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicUserDataBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicUserDataBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicUserDataBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
