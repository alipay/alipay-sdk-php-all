# Alipay\OpenAPISDK\AlipayOpenViolationViolationdetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenViolationViolationdetailApi.md#query) | **GET** /v3/alipay/open/violation/violationdetail/query | 违规记录详情查询


## `query()`

```php
query($violationRecordId): \Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationdetailQueryResponseModel
```

违规记录详情查询

违规记录详情查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenViolationViolationdetailApi(
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

$violationRecordId = 202205240010200000000000000; // string | 支付宝侧生成的违规记录唯一标识

try {
    $result = $apiInstance->query($violationRecordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenViolationViolationdetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **violationRecordId** | **string**| 支付宝侧生成的违规记录唯一标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenViolationViolationdetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
