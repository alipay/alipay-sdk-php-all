# Alipay\OpenAPISDK\AlipayMobilePublicMenuApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayMobilePublicMenuApi.md#add) | **POST** /v3/alipay/mobile/public/menu/add | 创建菜单
[**get()**](AlipayMobilePublicMenuApi.md#get) | **GET** /v3/alipay/mobile/public/menu/get | 查询菜单
[**update()**](AlipayMobilePublicMenuApi.md#update) | **POST** /v3/alipay/mobile/public/menu/update | 更新菜单


## `add()`

```php
add($alipayMobilePublicMenuAddModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuAddResponseModel
```

创建菜单

通过POST一个特定的结构体，实现支付宝钱包客户端的服务窗创建自定义菜单。本接口只可以调用一次，菜单已存在无需再次创建，今后只需要调用更新接口。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicMenuApi(
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

$alipayMobilePublicMenuAddModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuAddModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuAddModel

try {
    $result = $apiInstance->add($alipayMobilePublicMenuAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicMenuApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicMenuAddModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `get()`

```php
get(): \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuGetResponseModel
```

查询菜单

查询当前使用的自定义菜单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicMenuApi(
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
    $result = $apiInstance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicMenuApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuGetResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `update()`

```php
update($alipayMobilePublicMenuUpdateModel): \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuUpdateResponseModel
```

更新菜单

通过POST一个特定结构体，实现支付宝钱包客户端的公众账号更新自定义菜单。每一次的更新是针对全部自定义菜单的更新。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicMenuApi(
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

$alipayMobilePublicMenuUpdateModel = new \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuUpdateModel(); // \Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuUpdateModel

try {
    $result = $apiInstance->update($alipayMobilePublicMenuUpdateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicMenuApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMobilePublicMenuUpdateModel** | **\Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuUpdateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicMenuUpdateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
