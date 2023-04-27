# Alipay\OpenAPISDK\AlipayOpenMiniIsvApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenMiniIsvApi.md#create) | **POST** /v3/alipay/open/mini/isv/create | isv服务商代商户创建小程序
[**query()**](AlipayOpenMiniIsvApi.md#query) | **GET** /v3/alipay/open/mini/isv/query | isv查询代商家创建小程序记录


## `create()`

```php
create($alipayOpenMiniIsvCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvCreateResponseModel
```

isv服务商代商户创建小程序

服务商代商家创建小程序，待商家确认后服务商代创建的小程序才会生效，若商家超过确认时间则服务商创建的小程序会自动作废释放占用的小程序名称。 将 is_individual 设置为 true，并且同时传入 license_pic。将同时对具备个体工商户营业执照的商家个人账号认证成为个体工商户账号（创建小程序+升级个体工商户账号一体化）。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniIsvApi(
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

$alipayOpenMiniIsvCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvCreateModel

try {
    $result = $apiInstance->create($alipayOpenMiniIsvCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniIsvApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniIsvCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($orderNo): \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvQueryResponseModel
```

isv查询代商家创建小程序记录

isv查询代商家创建小程序记录

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniIsvApi(
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

$orderNo = 2394834823942343; // string | 服务商代商家创建小程序，由支付宝开放平台返回的订单号用于后续查询处理进展。

try {
    $result = $apiInstance->query($orderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniIsvApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderNo** | **string**| 服务商代商家创建小程序，由支付宝开放平台返回的订单号用于后续查询处理进展。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
