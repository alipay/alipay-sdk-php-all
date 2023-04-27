# Alipay\OpenAPISDK\AlipayOpenMiniIsvFastregisterApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenMiniIsvFastregisterApi.md#create) | **POST** /v3/alipay/open/mini/isv/fastregister/create | ISV代创建试用小程序
[**query()**](AlipayOpenMiniIsvFastregisterApi.md#query) | **GET** /v3/alipay/open/mini/isv/fastregister/query | 查询试用小程序


## `create()`

```php
create($alipayOpenMiniIsvFastregisterCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterCreateResponseModel
```

ISV代创建试用小程序

ISV代商户创建试用小程序

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniIsvFastregisterApi(
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

$alipayOpenMiniIsvFastregisterCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterCreateModel

try {
    $result = $apiInstance->create($alipayOpenMiniIsvFastregisterCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniIsvFastregisterApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniIsvFastregisterCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($orderNo): \Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterQueryResponseModel
```

查询试用小程序

查询试用小程序

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniIsvFastregisterApi(
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

$orderNo = 2202121278786786768; // string | 代创建试用小程序单号

try {
    $result = $apiInstance->query($orderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniIsvFastregisterApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderNo** | **string**| 代创建试用小程序单号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniIsvFastregisterQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
