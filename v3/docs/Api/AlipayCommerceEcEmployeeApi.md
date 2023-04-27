# Alipay\OpenAPISDK\AlipayCommerceEcEmployeeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayCommerceEcEmployeeApi.md#add) | **POST** /v3/alipay/commerce/ec/employee/add | 添加员工
[**delete()**](AlipayCommerceEcEmployeeApi.md#delete) | **POST** /v3/alipay/commerce/ec/employee/delete | 删除员工


## `add()`

```php
add($alipayCommerceEcEmployeeAddModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeAddResponseModel
```

添加员工

企业添加员工，并返回员工签约链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeApi(
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

$alipayCommerceEcEmployeeAddModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeAddModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeAddModel

try {
    $result = $apiInstance->add($alipayCommerceEcEmployeeAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEmployeeAddModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayCommerceEcEmployeeDeleteModel): object
```

删除员工

删除员工并解绑因公付

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeApi(
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

$alipayCommerceEcEmployeeDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeDeleteModel

try {
    $result = $apiInstance->delete($alipayCommerceEcEmployeeDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEmployeeDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeDeleteModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
