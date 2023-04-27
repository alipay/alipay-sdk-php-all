# Alipay\OpenAPISDK\AlipayOpenPublicMatchuserLabelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenPublicMatchuserLabelApi.md#create) | **POST** /v3/alipay/open/public/matchuser/label/create | 用户打标接口
[**delete()**](AlipayOpenPublicMatchuserLabelApi.md#delete) | **POST** /v3/alipay/open/public/matchuser/label/delete | 用户取消标签接口


## `create()`

```php
create($alipayOpenPublicMatchuserLabelCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelCreateResponseModel
```

用户打标接口

开发者可以使用此接口向匹配到的用户添加指定标签值，每个用户每个标签只能有一个标签值，当向同一个用户添加多个标签值时，最新的标签值会覆盖之前的标签值

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMatchuserLabelApi(
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

$alipayOpenPublicMatchuserLabelCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicMatchuserLabelCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMatchuserLabelApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMatchuserLabelCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayOpenPublicMatchuserLabelDeleteModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelDeleteResponseModel
```

用户取消标签接口

开发者可以使用此接口删除匹配到的支付宝用户的指定标签值

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMatchuserLabelApi(
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

$alipayOpenPublicMatchuserLabelDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelDeleteModel

try {
    $result = $apiInstance->delete($alipayOpenPublicMatchuserLabelDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMatchuserLabelApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMatchuserLabelDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelDeleteModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicMatchuserLabelDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
