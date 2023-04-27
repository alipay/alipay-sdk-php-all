# Alipay\OpenAPISDK\AlipayCommerceEcDepartmentInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayCommerceEcDepartmentInfoApi.md#modify) | **PUT** /v3/alipay/commerce/ec/department | 企业部门信息修改
[**query()**](AlipayCommerceEcDepartmentInfoApi.md#query) | **GET** /v3/alipay/commerce/ec/department/info/query | 查询部门详情


## `modify()`

```php
modify($alipayCommerceEcDepartmentInfoModifyModel): object
```

企业部门信息修改

修改企业部门信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcDepartmentInfoApi(
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

$alipayCommerceEcDepartmentInfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcDepartmentInfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcDepartmentInfoModifyModel

try {
    $result = $apiInstance->modify($alipayCommerceEcDepartmentInfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcDepartmentInfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcDepartmentInfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcDepartmentInfoModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($enterpriseId, $departmentId): \Alipay\OpenAPISDK\Model\AlipayCommerceEcDepartmentInfoQueryResponseModel
```

查询部门详情

根据部门id查询企业下某个部门的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcDepartmentInfoApi(
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

$enterpriseId = 2088441363102941; // string | 企业id
$departmentId = 1001094000039142; // string | 部门id

try {
    $result = $apiInstance->query($enterpriseId, $departmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcDepartmentInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业id | [optional]
 **departmentId** | **string**| 部门id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcDepartmentInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
