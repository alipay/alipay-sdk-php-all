# Alipay\OpenAPISDK\ZhimaMerchantZmgoTemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](ZhimaMerchantZmgoTemplateApi.md#create) | **POST** /v3/zhima/merchant/zmgo/template/create | 商户创建芝麻GO模板接口
[**query()**](ZhimaMerchantZmgoTemplateApi.md#query) | **GET** /v3/zhima/merchant/zmgo/template/query | 芝麻GO模板查询


## `create()`

```php
create($zhimaMerchantZmgoTemplateCreateModel): \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateCreateResponseModel
```

商户创建芝麻GO模板接口

外部商家接入芝麻GO场景下，为商户提供自助创建芝麻GO模板的能力。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantZmgoTemplateApi(
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

$zhimaMerchantZmgoTemplateCreateModel = new \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateCreateModel(); // \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateCreateModel

try {
    $result = $apiInstance->create($zhimaMerchantZmgoTemplateCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantZmgoTemplateApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaMerchantZmgoTemplateCreateModel** | **\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($templateNo, $partnerId): \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateQueryResponseModel
```

芝麻GO模板查询

芝麻GO模板查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantZmgoTemplateApi(
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

$templateNo = ZMGO_TPL2021061601004538; // string | 模板ID，由创建模板接口返回结果提供
$partnerId = 208830****697946; // string | 商户ID

try {
    $result = $apiInstance->query($templateNo, $partnerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantZmgoTemplateApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateNo** | **string**| 模板ID，由创建模板接口返回结果提供 | [optional]
 **partnerId** | **string**| 商户ID | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoTemplateQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
