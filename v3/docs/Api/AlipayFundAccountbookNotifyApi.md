# Alipay\OpenAPISDK\AlipayFundAccountbookNotifyApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundAccountbookNotifyApi.md#query) | **GET** /v3/alipay/fund/accountbook/notify/query | 记账本通知订阅关系查询接口
[**subscribe()**](AlipayFundAccountbookNotifyApi.md#subscribe) | **POST** /v3/alipay/fund/accountbook/notify/subscribe | 记账本通知订阅接口
[**unsubscribe()**](AlipayFundAccountbookNotifyApi.md#unsubscribe) | **POST** /v3/alipay/fund/accountbook/notify/unsubscribe | 记账本通知取消订阅接口


## `query()`

```php
query($productCode, $bizScene, $accountBookId, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyQueryResponseModel
```

记账本通知订阅关系查询接口

ISV通过此接口查询指定记账本的入金和出金通知的订阅关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountbookNotifyApi(
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

$productCode = SATF_FUND_BOOK; // string | 产品码。固定为SATF_FUND_BOOK
$bizScene = DEFAULT; // string | 场景码。固定为DEFAULT
$accountBookId = 2088000147677710; // string | 记账本ID
$agreementNo = 20205724001102186227; // string | 协议号。 若是基于协议的记账本，则agreement_no必传； 若是自创建的记账本，则agreement_no不传；

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountBookId, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountbookNotifyApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码。固定为SATF_FUND_BOOK | [optional]
 **bizScene** | **string**| 场景码。固定为DEFAULT | [optional]
 **accountBookId** | **string**| 记账本ID | [optional]
 **agreementNo** | **string**| 协议号。 若是基于协议的记账本，则agreement_no必传； 若是自创建的记账本，则agreement_no不传； | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `subscribe()`

```php
subscribe($alipayFundAccountbookNotifySubscribeModel): \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifySubscribeResponseModel
```

记账本通知订阅接口

ISV通过此接口订阅指定记账本的入金和出金通知。目前只有非OpenAPI方式的充值通知（比如大额来账、贷款入金）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountbookNotifyApi(
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

$alipayFundAccountbookNotifySubscribeModel = new \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifySubscribeModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifySubscribeModel

try {
    $result = $apiInstance->subscribe($alipayFundAccountbookNotifySubscribeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountbookNotifyApi->subscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAccountbookNotifySubscribeModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifySubscribeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifySubscribeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsubscribe()`

```php
unsubscribe($alipayFundAccountbookNotifyUnsubscribeModel): \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyUnsubscribeResponseModel
```

记账本通知取消订阅接口

ISV通过此接口取消订阅指定记账本的入金和出金通知

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAccountbookNotifyApi(
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

$alipayFundAccountbookNotifyUnsubscribeModel = new \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyUnsubscribeModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyUnsubscribeModel

try {
    $result = $apiInstance->unsubscribe($alipayFundAccountbookNotifyUnsubscribeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAccountbookNotifyApi->unsubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAccountbookNotifyUnsubscribeModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyUnsubscribeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAccountbookNotifyUnsubscribeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
