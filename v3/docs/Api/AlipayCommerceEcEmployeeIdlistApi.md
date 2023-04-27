# Alipay\OpenAPISDK\AlipayCommerceEcEmployeeIdlistApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcEmployeeIdlistApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/idlist/query | 查询部门下员工id列表


## `query()`

```php
query($enterpriseId, $departmentId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeIdlistQueryResponseModel
```

查询部门下员工id列表

查询某个部门下员工id列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeIdlistApi(
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
$pageNum = 1; // int | 查询页数
$pageSize = 1000; // int | 每页查询大小，限制最大为1000

try {
    $result = $apiInstance->query($enterpriseId, $departmentId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeIdlistApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业id | [optional]
 **departmentId** | **string**| 部门id | [optional]
 **pageNum** | **int**| 查询页数 | [optional]
 **pageSize** | **int**| 每页查询大小，限制最大为1000 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeIdlistQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
