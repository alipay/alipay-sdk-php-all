# Alipay\OpenAPISDK\AlipayOpenSpOpporPageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSpOpporPageApi.md#query) | **GET** /v3/alipay/open/sp/oppor/page/query | 商机作业列表查询


## `query()`

```php
query($isvPid, $statusList, $pageSize, $pageNum): \Alipay\OpenAPISDK\Model\AlipayOpenSpOpporPageQueryResponseModel
```

商机作业列表查询

商机作业列表查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpOpporPageApi(
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

$isvPid = 2088302213873401; // string | 服务商pid
$statusList = WAIT_MER_CONFIRM,MER_CONFIRMED,MER_REJECTED,EXPANDING,EXPANDED,EXPAND_FAILED; // string | 作业记录状态列表,以,拼接传入
$pageSize = 10; // string | 页大小
$pageNum = 1; // string | 页数

try {
    $result = $apiInstance->query($isvPid, $statusList, $pageSize, $pageNum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpOpporPageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isvPid** | **string**| 服务商pid | [optional]
 **statusList** | **string**| 作业记录状态列表,以,拼接传入 | [optional]
 **pageSize** | **string**| 页大小 | [optional]
 **pageNum** | **string**| 页数 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpOpporPageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
