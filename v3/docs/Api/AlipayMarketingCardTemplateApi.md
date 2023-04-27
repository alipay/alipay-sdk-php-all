# Alipay\OpenAPISDK\AlipayMarketingCardTemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayMarketingCardTemplateApi.md#batchquery) | **POST** /v3/alipay/marketing/card/template/batchquery | 会员卡模板批量查询
[**create()**](AlipayMarketingCardTemplateApi.md#create) | **POST** /v3/alipay/marketing/card/template/create | 会员卡模板创建
[**modify()**](AlipayMarketingCardTemplateApi.md#modify) | **POST** /v3/alipay/marketing/card/template/modify | 会员卡模板修改
[**query()**](AlipayMarketingCardTemplateApi.md#query) | **GET** /v3/alipay/marketing/card/template/query | 会员卡模板查询接口


## `batchquery()`

```php
batchquery($alipayMarketingCardTemplateBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateBatchqueryResponseModel
```

会员卡模板批量查询

会员卡模板批量查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardTemplateApi(
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

$alipayMarketingCardTemplateBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayMarketingCardTemplateBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardTemplateApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardTemplateBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayMarketingCardTemplateCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateCreateResponseModel
```

会员卡模板创建

会员卡模板创建

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardTemplateApi(
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

$alipayMarketingCardTemplateCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateCreateModel

try {
    $result = $apiInstance->create($alipayMarketingCardTemplateCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardTemplateApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardTemplateCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayMarketingCardTemplateModifyModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateModifyResponseModel
```

会员卡模板修改

会员卡模板修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardTemplateApi(
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

$alipayMarketingCardTemplateModifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateModifyModel

try {
    $result = $apiInstance->modify($alipayMarketingCardTemplateModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardTemplateApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardTemplateModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($templateId): \Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateQueryResponseModel
```

会员卡模板查询接口

会员卡模板查询接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardTemplateApi(
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

$templateId = 20160718000000001; // string | 会员卡模板id。调用alipay.marketing.card.template.create（会员卡模板创建接口）创建模板后同步返回。

try {
    $result = $apiInstance->query($templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardTemplateApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 会员卡模板id。调用alipay.marketing.card.template.create（会员卡模板创建接口）创建模板后同步返回。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardTemplateQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
