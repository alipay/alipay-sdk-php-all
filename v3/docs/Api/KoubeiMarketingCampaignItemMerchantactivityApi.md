# Alipay\OpenAPISDK\KoubeiMarketingCampaignItemMerchantactivityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](KoubeiMarketingCampaignItemMerchantactivityApi.md#batchquery) | **POST** /v3/koubei/marketing/campaign/item/merchantactivity/batchquery | 商户查询商品代金券列表
[**close()**](KoubeiMarketingCampaignItemMerchantactivityApi.md#close) | **POST** /v3/koubei/marketing/campaign/item/merchantactivity/close | 商户下架代金券
[**create()**](KoubeiMarketingCampaignItemMerchantactivityApi.md#create) | **POST** /v3/koubei/marketing/campaign/item/merchantactivity/create | 商户创建商品代金券
[**modify()**](KoubeiMarketingCampaignItemMerchantactivityApi.md#modify) | **POST** /v3/koubei/marketing/campaign/item/merchantactivity/modify | 商户修改商品代金券
[**query()**](KoubeiMarketingCampaignItemMerchantactivityApi.md#query) | **GET** /v3/koubei/marketing/campaign/item/merchantactivity/query | 商户查询商品代金券详情


## `batchquery()`

```php
batchquery($koubeiMarketingCampaignItemMerchantactivityBatchqueryModel): \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityBatchqueryResponseModel
```

商户查询商品代金券列表

商户查询商品代金券列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignItemMerchantactivityApi(
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

$koubeiMarketingCampaignItemMerchantactivityBatchqueryModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityBatchqueryModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityBatchqueryModel

try {
    $result = $apiInstance->batchquery($koubeiMarketingCampaignItemMerchantactivityBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignItemMerchantactivityApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignItemMerchantactivityBatchqueryModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `close()`

```php
close($koubeiMarketingCampaignItemMerchantactivityCloseModel): object
```

商户下架代金券

商户下架代金券

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignItemMerchantactivityApi(
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

$koubeiMarketingCampaignItemMerchantactivityCloseModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCloseModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCloseModel

try {
    $result = $apiInstance->close($koubeiMarketingCampaignItemMerchantactivityCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignItemMerchantactivityApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignItemMerchantactivityCloseModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCloseModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($koubeiMarketingCampaignItemMerchantactivityCreateModel): \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCreateResponseModel
```

商户创建商品代金券

商户创建商品代金券

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignItemMerchantactivityApi(
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

$koubeiMarketingCampaignItemMerchantactivityCreateModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCreateModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCreateModel

try {
    $result = $apiInstance->create($koubeiMarketingCampaignItemMerchantactivityCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignItemMerchantactivityApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignItemMerchantactivityCreateModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($koubeiMarketingCampaignItemMerchantactivityModifyModel): object
```

商户修改商品代金券

商户修改商品代金券

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignItemMerchantactivityApi(
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

$koubeiMarketingCampaignItemMerchantactivityModifyModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityModifyModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityModifyModel

try {
    $result = $apiInstance->modify($koubeiMarketingCampaignItemMerchantactivityModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignItemMerchantactivityApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignItemMerchantactivityModifyModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($activityId, $externalUniqueId): \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityQueryResponseModel
```

商户查询商品代金券详情

商户查询商品代金券详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignItemMerchantactivityApi(
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

$activityId = 2018xxxx; // string | 运营活动id
$externalUniqueId = 2018xxxx; // string | 外部id

try {
    $result = $apiInstance->query($activityId, $externalUniqueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignItemMerchantactivityApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 运营活动id | [optional]
 **externalUniqueId** | **string**| 外部id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignItemMerchantactivityQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
