# Alipay\OpenAPISDK\AlipayOpenPublicLifeAgentcreateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenPublicLifeAgentcreateApi.md#query) | **GET** /v3/alipay/open/public/life/agentcreate/query | isv代创建生活号申请状态查询接口


## `query()`

```php
query($outBizNo): \Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeAgentcreateQueryResponseModel
```

isv代创建生活号申请状态查询接口

isv可调用此接口查询代商户创建的生活号审核状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicLifeAgentcreateApi(
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

$outBizNo = 2016070788301823878; // string | 由开发者创建的外部入驻申请单据号，需与<a href=\"https://opendocs.alipay.com/apis/api_6/alipay.open.public.life.agent.create\">alipay.open.public.life.agent.create</a>(isv代创建生活号接口)的out_biz_no一致。

try {
    $result = $apiInstance->query($outBizNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicLifeAgentcreateApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outBizNo** | **string**| 由开发者创建的外部入驻申请单据号，需与&lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_6/alipay.open.public.life.agent.create\&quot;&gt;alipay.open.public.life.agent.create&lt;/a&gt;(isv代创建生活号接口)的out_biz_no一致。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicLifeAgentcreateQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
