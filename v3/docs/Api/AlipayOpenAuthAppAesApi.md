# Alipay\OpenAPISDK\AlipayOpenAuthAppAesApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**get()**](AlipayOpenAuthAppAesApi.md#get) | **GET** /v3/alipay/open/auth/app/aes/get | 授权应用aes密钥查询
[**set()**](AlipayOpenAuthAppAesApi.md#set) | **POST** /v3/alipay/open/auth/app/aes/set | 授权应用aes密钥设置


## `get()`

```php
get($merchantAppId): \Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesGetResponseModel
```

授权应用aes密钥查询

商家应用授权给ISV服务商代管理应用场景下，ISV开发者使用三方应用appId发起调用，通过该接口获取商户应用的AES密钥。接口返回的商户应用aes密钥内容为加密内容，需要ISV使用三方应用的AES密钥对接口返回进行解密。java sdk内部会自动完成解密返回明文内容。<a href=\"https://docs.open.alipay.com/common/104567\" target=\"_blank\">SDK AES加解密支持</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAuthAppAesApi(
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

$merchantAppId = 20191223601234564; // string | 商家应用appId

try {
    $result = $apiInstance->get($merchantAppId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAuthAppAesApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantAppId** | **string**| 商家应用appId | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `set()`

```php
set($alipayOpenAuthAppAesSetModel): \Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesSetResponseModel
```

授权应用aes密钥设置

商家应用授权给ISV服务商代管理应用场景下，ISV开发者使用三方应用appId发起调用，通过该接口设置商户应用的AES密钥。接口返回的商户应用aes密钥内容为加密内容，需要ISV使用三方应用的AES密钥对接口返回进行解密。java sdk内部会自动完成解密返回明文内容。<a href=\"https://docs.open.alipay.com/common/104567\" target=\"_blank\">SDK AES加解密支持。</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAuthAppAesApi(
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

$alipayOpenAuthAppAesSetModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesSetModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesSetModel

try {
    $result = $apiInstance->set($alipayOpenAuthAppAesSetModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAuthAppAesApi->set: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAuthAppAesSetModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesSetModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAuthAppAesSetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
