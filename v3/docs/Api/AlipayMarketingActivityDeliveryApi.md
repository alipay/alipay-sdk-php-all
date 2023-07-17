# Alipay\OpenAPISDK\AlipayMarketingActivityDeliveryApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayMarketingActivityDeliveryApi.md#create) | **POST** /v3/alipay/marketing/delivery | 创建推广计划
[**query()**](AlipayMarketingActivityDeliveryApi.md#query) | **POST** /v3/alipay/marketing/delivery/{delivery_id}/query | 查询推广计划
[**stop()**](AlipayMarketingActivityDeliveryApi.md#stop) | **PATCH** /v3/alipay/marketing/delivery/{delivery_id}/stop | 停止推广计划


## `create()`

```php
create($alipayMarketingActivityDeliveryCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryCreateResponseModel
```

创建推广计划

为商家提供推广内容能力。创建推广成功后，请依据推广变更消息alipay.marketing.activity.delivery.message感知推广变更状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityDeliveryApi(
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

$alipayMarketingActivityDeliveryCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryCreateModel

try {
    $result = $apiInstance->create($alipayMarketingActivityDeliveryCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityDeliveryApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityDeliveryCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($deliveryId, $alipayMarketingActivityDeliveryQueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryQueryResponseModel
```

查询推广计划

查询推广计划详情信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityDeliveryApi(
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

$deliveryId = 20121231231242353; // string | 推广计划id
$alipayMarketingActivityDeliveryQueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryQueryModel

try {
    $result = $apiInstance->query($deliveryId, $alipayMarketingActivityDeliveryQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityDeliveryApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deliveryId** | **string**| 推广计划id |
 **alipayMarketingActivityDeliveryQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `stop()`

```php
stop($deliveryId, $alipayMarketingActivityDeliveryStopModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryStopResponseModel
```

停止推广计划

停止推广计划。  注意：停止推广操作成功到推广内容停止生效，可能存在几分钟的延迟。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityDeliveryApi(
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

$deliveryId = 20121231231242353; // string | 推广计划id
$alipayMarketingActivityDeliveryStopModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryStopModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryStopModel

try {
    $result = $apiInstance->stop($deliveryId, $alipayMarketingActivityDeliveryStopModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityDeliveryApi->stop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deliveryId** | **string**| 推广计划id |
 **alipayMarketingActivityDeliveryStopModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryStopModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityDeliveryStopResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
