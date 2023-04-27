# Alipay\OpenAPISDK\AlipayIserviceCcmRolePageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayIserviceCcmRolePageApi.md#query) | **GET** /v3/alipay/iservice/ccm/role/page/query | 分页查询角色


## `query()`

```php
query($name, $pageNum, $pageSize, $ccsInstanceId): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmRolePageQueryResponseModel
```

分页查询角色

分页查询角色

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmRolePageApi(
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

$name = 普通客服; // string | 角色名称
$pageNum = 1; // int | 查询结果的页码，起始值为 1，默认值为 1
$pageSize = 10; // int | 分页查询时设置的每页记录数，最大值 100 行，默认为 10
$ccsInstanceId = kaj_9DA1; // string | 部门id（即租户实例ID、数据权限ID）

try {
    $result = $apiInstance->query($name, $pageNum, $pageSize, $ccsInstanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmRolePageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 角色名称 | [optional]
 **pageNum** | **int**| 查询结果的页码，起始值为 1，默认值为 1 | [optional]
 **pageSize** | **int**| 分页查询时设置的每页记录数，最大值 100 行，默认为 10 | [optional]
 **ccsInstanceId** | **string**| 部门id（即租户实例ID、数据权限ID） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmRolePageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
