# Alipay\OpenAPISDK\AlipayOpenAgentSignstatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAgentSignstatusApi.md#query) | **POST** /v3/alipay/open/agent/signstatus/query | 查询商户某个产品的签约状态


## `query()`

```php
query($alipayOpenAgentSignstatusQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenAgentSignstatusQueryResponseModel
```

查询商户某个产品的签约状态

主要用在isv代理商户签约场景，用来查询商户签约某个产品的签约状态，可以配合\"第三方接入核心API\"功能包里的接口使用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentSignstatusApi(
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

$alipayOpenAgentSignstatusQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentSignstatusQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentSignstatusQueryModel

try {
    $result = $apiInstance->query($alipayOpenAgentSignstatusQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentSignstatusApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenAgentSignstatusQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentSignstatusQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAgentSignstatusQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
