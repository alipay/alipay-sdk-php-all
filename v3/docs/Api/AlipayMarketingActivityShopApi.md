# Alipay\OpenAPISDK\AlipayMarketingActivityShopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMarketingActivityShopApi.md#batchquery) | **GET** /v3/alipay/marketing/activity/{activity_id}/shop/batchquery | 查询活动可用门店


## `batchquery()`

```php
batchquery($activityId, $merchantId, $pageNum, $pageSize, $productVersion, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityShopBatchqueryResponseModel
```

查询活动可用门店

通过此接口可查询活动的可用门店，判断券是否在某门店可用，来决定是否展示。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityShopApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$merchantId = 2088202967380463; // string | 商户PID,默认为当前接口调用商户。
$pageNum = 1; // int | 分页查询页码。  限制:  必须为大于0的整数
$pageSize = 20; // int | 分页查询单页数据条数。  限制:  1.必须为大于0的整数  2.每页最大值为20
$productVersion = 2.0.0; // string | 版本号  枚举值: 2.0.0
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式

try {
    $result = $apiInstance->batchquery($activityId, $merchantId, $pageNum, $pageSize, $productVersion, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityShopApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **merchantId** | **string**| 商户PID,默认为当前接口调用商户。 | [optional]
 **pageNum** | **int**| 分页查询页码。  限制:  必须为大于0的整数 | [optional]
 **pageSize** | **int**| 分页查询单页数据条数。  限制:  1.必须为大于0的整数  2.每页最大值为20 | [optional]
 **productVersion** | **string**| 版本号  枚举值: 2.0.0 | [optional]
 **merchantAccessMode** | **string**| 商户接入模式 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityShopBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
