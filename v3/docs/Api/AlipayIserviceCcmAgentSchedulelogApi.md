# Alipay\OpenAPISDK\AlipayIserviceCcmAgentSchedulelogApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayIserviceCcmAgentSchedulelogApi.md#query) | **POST** /v3/alipay/iservice/ccm/agent/schedulelog/query | 查询客服状态变更流水日志


## `query()`

```php
query($alipayIserviceCcmAgentSchedulelogQueryModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentSchedulelogQueryResponseModel
```

查询客服状态变更流水日志

ISV或商户批量查询获取客服状态变更流水日志详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmAgentSchedulelogApi(
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

$alipayIserviceCcmAgentSchedulelogQueryModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentSchedulelogQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentSchedulelogQueryModel

try {
    $result = $apiInstance->query($alipayIserviceCcmAgentSchedulelogQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmAgentSchedulelogApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmAgentSchedulelogQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentSchedulelogQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmAgentSchedulelogQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
