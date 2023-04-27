# Alipay\OpenAPISDK\AlipayEcoSignflowsUrlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEcoSignflowsUrlApi.md#query) | **GET** /v3/alipay/eco/signflows/url/query | 获取签署地址


## `query()`

```php
query($targetAppId, $flowId, $thirdPartyUserId, $orgThirdPartyUserId): \Alipay\OpenAPISDK\Model\AlipayEcoSignflowsUrlQueryResponseModel
```

获取签署地址

创建流程后，获取指定签署人的签署链接地址，可在应用内集成H5签署页，或者通过短信发送签署链接。 传入个人唯一标识，则获取的签署任务链接仅包含个人人的签署任务；如同时传入企业唯一标识，则获取的签署任务链接包含企业与个人的签署任务。 预览链接：支持签署人先查看合同原文，后进行登录并完成签署。适用于应用内集成场景。 签署链接：签署人需要登录后查看合同原文并签署。适用用短信发送场景。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoSignflowsUrlApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$flowId = 429b1d3038854cabbcdac0a63d7e4c0d; // string | 流程id，通过 <a href =\"https://opendocs.alipay.com/apis/api_50/alipay.eco.contract.signflows.create\">创建电子合同签署流程</a>(alipay.eco.contract.signflows.create)接口获取。
$thirdPartyUserId = 2088102924502823; // string | 创建流程时指定个人唯一标识
$orgThirdPartyUserId = 913301087458306077; // string | 创建流程时指定企业唯一标识

try {
    $result = $apiInstance->query($targetAppId, $flowId, $thirdPartyUserId, $orgThirdPartyUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoSignflowsUrlApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **flowId** | **string**| 流程id，通过 &lt;a href &#x3D;\&quot;https://opendocs.alipay.com/apis/api_50/alipay.eco.contract.signflows.create\&quot;&gt;创建电子合同签署流程&lt;/a&gt;(alipay.eco.contract.signflows.create)接口获取。 | [optional]
 **thirdPartyUserId** | **string**| 创建流程时指定个人唯一标识 | [optional]
 **orgThirdPartyUserId** | **string**| 创建流程时指定企业唯一标识 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoSignflowsUrlQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
