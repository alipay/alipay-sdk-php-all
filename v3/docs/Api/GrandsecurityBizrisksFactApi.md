# Alipay\OpenAPISDK\GrandsecurityBizrisksFactApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**check()**](GrandsecurityBizrisksFactApi.md#check) | **POST** /v3/stream/grandsecurity/bizrisks/fact/check | 事实核查服务


## `check()`

```php
check($grandsecurityBizrisksFactCheckModel): \Alipay\OpenAPISDK\Model\GrandsecurityBizrisksFactCheckResponseModel
```

事实核查服务

模型接口将根据前端返回的问题（query），基于真假结论、核心摘要、推理过程、相关证据、警告、机构名称等，将以上字段梳理为综合判定、判断依据、结论、研处意见及参考资料的四大模块结构，并传至前端提供C端。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\GrandsecurityBizrisksFactApi(
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

$grandsecurityBizrisksFactCheckModel = new \Alipay\OpenAPISDK\Model\GrandsecurityBizrisksFactCheckModel(); // \Alipay\OpenAPISDK\Model\GrandsecurityBizrisksFactCheckModel

try {
    $result = $apiInstance->check($grandsecurityBizrisksFactCheckModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GrandsecurityBizrisksFactApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grandsecurityBizrisksFactCheckModel** | **\Alipay\OpenAPISDK\Model\GrandsecurityBizrisksFactCheckModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\GrandsecurityBizrisksFactCheckResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
