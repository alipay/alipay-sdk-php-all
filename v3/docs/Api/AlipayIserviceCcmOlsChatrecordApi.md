# Alipay\OpenAPISDK\AlipayIserviceCcmOlsChatrecordApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayIserviceCcmOlsChatrecordApi.md#query) | **GET** /v3/alipay/iservice/ccm/ols/chatrecord/query | 查询某通在线服务的聊天记录


## `query()`

```php
query($ccsInstanceId, $id): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmOlsChatrecordQueryResponseModel
```

查询某通在线服务的聊天记录

ISV或商户根据在线服务记录id查询该通对话的聊天记录及相关信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmOlsChatrecordApi(
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

$ccsInstanceId = ZPSDWACN; // string | 租户实例id（数据权限id），不填，则使用默认的租户实例id
$id = 201909021113010100000001922200; // string | 在线服务记录id

try {
    $result = $apiInstance->query($ccsInstanceId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmOlsChatrecordApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ccsInstanceId** | **string**| 租户实例id（数据权限id），不填，则使用默认的租户实例id | [optional]
 **id** | **string**| 在线服务记录id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmOlsChatrecordQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
