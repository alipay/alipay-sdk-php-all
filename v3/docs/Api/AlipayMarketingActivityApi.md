# Alipay\OpenAPISDK\AlipayMarketingActivityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMarketingActivityApi.md#batchquery) | **POST** /v3/alipay/marketing/activity/batchquery | 条件查询活动列表
[**consult()**](AlipayMarketingActivityApi.md#consult) | **POST** /v3/alipay/marketing/activity/consult | 活动领取咨询接口
[**query()**](AlipayMarketingActivityApi.md#query) | **GET** /v3/alipay/marketing/activity/{activity_id} | 查询活动详情


## `batchquery()`

```php
batchquery($alipayMarketingActivityBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityBatchqueryResponseModel
```

条件查询活动列表

通过此接口可查询多个活动的摘要信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityApi(
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

$alipayMarketingActivityBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayMarketingActivityBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `consult()`

```php
consult($alipayMarketingActivityConsultModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityConsultResponseModel
```

活动领取咨询接口

通过此接口可以咨询用户是否可以领取该活动优惠券，决定是否对用户展示该活动信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityApi(
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

$alipayMarketingActivityConsultModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityConsultModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityConsultModel

try {
    $result = $apiInstance->consult($alipayMarketingActivityConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityConsultModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($activityId, $merchantId, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityQueryResponseModel
```

查询活动详情

通过此接口可以查询活动详情，包括支付券和商家券活动。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityApi(
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
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式。

try {
    $result = $apiInstance->query($activityId, $merchantId, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **merchantId** | **string**| 商户PID,默认为当前接口调用商户。 | [optional]
 **merchantAccessMode** | **string**| 商户接入模式。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
