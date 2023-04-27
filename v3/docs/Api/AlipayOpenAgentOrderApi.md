# Alipay\OpenAPISDK\AlipayOpenAgentOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAgentOrderApi.md#query) | **GET** /v3/alipay/open/agent/order/query | 查询申请单状态


## `query()`

```php
query($batchNo): \Alipay\OpenAPISDK\Model\AlipayOpenAgentOrderQueryResponseModel
```

查询申请单状态

代签约产品提交后，查询对应申请单的情况

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentOrderApi(
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

$batchNo = 2017110616474516400082883; // string | ISV 代商户操作事务编号，通过调用alipay.open.agent.create(开启代商户签约、创建应用事务)接口返回，详见 https://opendocs.alipay.com/apis/api_50/alipay.open.agent.create/ 。

try {
    $result = $apiInstance->query($batchNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchNo** | **string**| ISV 代商户操作事务编号，通过调用alipay.open.agent.create(开启代商户签约、创建应用事务)接口返回，详见 https://opendocs.alipay.com/apis/api_50/alipay.open.agent.create/ 。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAgentOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
