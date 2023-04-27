# Alipay\OpenAPISDK\AlipayOpenSpIsvSignauthApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenSpIsvSignauthApi.md#create) | **POST** /v3/alipay/open/sp/isv/signauth/create | 创建签约授权一体化订单
[**query()**](AlipayOpenSpIsvSignauthApi.md#query) | **GET** /v3/alipay/open/sp/isv/signauth/query | 查询签约授权一体化订单状态详情


## `create()`

```php
create($alipayOpenSpIsvSignauthCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthCreateResponseModel
```

创建签约授权一体化订单

针对签约授权一体化场景，创建签约授权一体化订单绑定签约单（可选）、绑定代运营授权单、应用授权单，跟踪整个签约授权一体化订单的状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpIsvSignauthApi(
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

$alipayOpenSpIsvSignauthCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthCreateModel

try {
    $result = $apiInstance->create($alipayOpenSpIsvSignauthCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpIsvSignauthApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpIsvSignauthCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($orderId): \Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthQueryResponseModel
```

查询签约授权一体化订单状态详情

查询签约授权一体化订单状态详情（包含子任务信息）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpIsvSignauthApi(
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

$orderId = 20211102034000100000047728652040; // string | 签约授权一体化订单ID 可通过alipay.open.sp.isv.signauth.create 接口获取

try {
    $result = $apiInstance->query($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpIsvSignauthApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| 签约授权一体化订单ID 可通过alipay.open.sp.isv.signauth.create 接口获取 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpIsvSignauthQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
