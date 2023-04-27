# Alipay\OpenAPISDK\AlipayMarketingActivityVoucherpackageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMarketingActivityVoucherpackageApi.md#batchquery) | **POST** /v3/alipay/marketing/activity/voucherpackage/batchquery | 券包批量查询
[**consult()**](AlipayMarketingActivityVoucherpackageApi.md#consult) | **POST** /v3/alipay/marketing/activity/voucherpackage/consult | 券包购买咨询
[**query()**](AlipayMarketingActivityVoucherpackageApi.md#query) | **GET** /v3/alipay/marketing/activity/voucherpackage/query | 券包详情查询


## `batchquery()`

```php
batchquery($alipayMarketingActivityVoucherpackageBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageBatchqueryResponseModel
```

券包批量查询

券包批量查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherpackageApi(
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

$alipayMarketingActivityVoucherpackageBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayMarketingActivityVoucherpackageBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherpackageApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherpackageBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `consult()`

```php
consult($authToken, $alipayMarketingActivityVoucherpackageConsultModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageConsultResponseModel
```

券包购买咨询

券包购买咨询，咨询当前用户是否可以购买指定的券包

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherpackageApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$alipayMarketingActivityVoucherpackageConsultModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageConsultModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageConsultModel

try {
    $result = $apiInstance->consult($authToken, $alipayMarketingActivityVoucherpackageConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherpackageApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayMarketingActivityVoucherpackageConsultModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($voucherPackageId): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageQueryResponseModel
```

券包详情查询

查询券包详情，包括券包信息和券包下面券信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherpackageApi(
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

$voucherPackageId = IP20220628016671405804297103167741; // string | 券包id

try {
    $result = $apiInstance->query($voucherPackageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherpackageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucherPackageId** | **string**| 券包id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherpackageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
