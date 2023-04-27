# Alipay\OpenAPISDK\AlipayMerchantTradecomplainApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMerchantTradecomplainApi.md#batchquery) | **POST** /v3/alipay/merchant/tradecomplain/batchquery | 查询交易投诉列表
[**query()**](AlipayMerchantTradecomplainApi.md#query) | **GET** /v3/alipay/merchant/tradecomplain/{complain_event_id} | 查询单条交易投诉详情


## `batchquery()`

```php
batchquery($alipayMerchantTradecomplainBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainBatchqueryResponseModel
```

查询交易投诉列表

开发者根据其应用id查询用户在其应用（小程序、生活号）的投诉单列表记录。投诉单列表以分页查询方式返回。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantTradecomplainApi(
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

$alipayMerchantTradecomplainBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayMerchantTradecomplainBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantTradecomplainApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantTradecomplainBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($complainEventId): \Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainQueryResponseModel
```

查询单条交易投诉详情

开发者根据支付宝侧投诉单号查询该笔投诉详细记录。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantTradecomplainApi(
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

$complainEventId = 2020092300102000000001459758; // string | 支付宝侧投诉单号

try {
    $result = $apiInstance->query($complainEventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantTradecomplainApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **complainEventId** | **string**| 支付宝侧投诉单号 |

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantTradecomplainQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
