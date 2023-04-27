# Alipay\OpenAPISDK\AlipayOpenAppServiceListApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAppServiceListApi.md#query) | **GET** /v3/alipay/open/app/service/list/query | 服务批量查询


## `query()`

```php
query($serviceName, $categoryId, $pageSize, $pageNum): \Alipay\OpenAPISDK\Model\AlipayOpenAppServiceListQueryResponseModel
```

服务批量查询

服务批量分页查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppServiceListApi(
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

$serviceName = 肯德基; // string | 服务名称
$categoryId = C15484611; // string | 类目
$pageSize = 10; // int | 每页记录数
$pageNum = 1; // int | 页码

try {
    $result = $apiInstance->query($serviceName, $categoryId, $pageSize, $pageNum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppServiceListApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceName** | **string**| 服务名称 | [optional]
 **categoryId** | **string**| 类目 | [optional]
 **pageSize** | **int**| 每页记录数 | [optional]
 **pageNum** | **int**| 页码 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppServiceListQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
