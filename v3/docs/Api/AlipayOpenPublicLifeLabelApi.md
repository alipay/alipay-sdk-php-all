# Alipay\OpenAPISDK\AlipayOpenPublicLifeLabelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayOpenPublicLifeLabelApi.md#batchquery) | **POST** /v3/alipay/open/public/life/label/batchquery | 标签批量查询接口
[**create()**](AlipayOpenPublicLifeLabelApi.md#create) | **POST** /v3/alipay/open/public/life/label/create | 创建标签接口
[**delete()**](AlipayOpenPublicLifeLabelApi.md#delete) | **DELETE** /v3/alipay/open/public/life/label/delete | 标签删除接口
[**modify()**](AlipayOpenPublicLifeLabelApi.md#modify) | **POST** /v3/alipay/open/public/life/label/modify | 标签修改接口


## `batchquery()`

```php
batchquery(): \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelBatchqueryResponseModel
```

标签批量查询接口

开发者可调用该接口查询生活号支持的标签列表，其中包括生活号通用标签、生活号自定义标签以及数据实验室标签。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeLabelApi(
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


try {
    $result = $apiInstance->batchquery();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeLabelApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayOpenPublicLifeLabelCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelCreateResponseModel
```

创建标签接口

开发者可使用该API创建自定义标签

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeLabelApi(
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

$alipayOpenPublicLifeLabelCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicLifeLabelCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeLabelApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicLifeLabelCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($labelId): object
```

标签删除接口

开发者可调用此API删除自定义标签

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeLabelApi(
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

$labelId = 10000; // string | 标签 id，只支持生活号自定义标签。通过 <a href=\"https://opendocs.alipay.com/apis/api_6/alipay.open.public.life.label.create\">alipay.open.public.life.label.create</a>(创建标签接口)创建自定义标签后获取。

try {
    $result = $apiInstance->delete($labelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeLabelApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelId** | **string**| 标签 id，只支持生活号自定义标签。通过 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_6/alipay.open.public.life.label.create\&quot;&gt;alipay.open.public.life.label.create&lt;/a&gt;(创建标签接口)创建自定义标签后获取。 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOpenPublicLifeLabelModifyModel): object
```

标签修改接口

开发者可调用此API修改自定义标签的名称

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeLabelApi(
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

$alipayOpenPublicLifeLabelModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelModifyModel

try {
    $result = $apiInstance->modify($alipayOpenPublicLifeLabelModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeLabelApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicLifeLabelModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeLabelModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
