# Alipay\OpenAPISDK\ZhimaCustomerJobworthCloudresumeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaCustomerJobworthCloudresumeApi.md#query) | **GET** /v3/zhima/customer/jobworth/cloudresume/query | 智能简历基本数据查询


## `query()`

```php
query($connKey, $onceToken): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthCloudresumeQueryResponseModel
```

智能简历基本数据查询

用于查询工作证基本信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthCloudresumeApi(
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

$connKey = uuid; // string | 长效的认证令牌：zhima.credit.payafteruse.creditagreement.sign 的out_agreement_no
$onceToken = uuid; // string | 交换云简历的单次token：zhima.credit.payafteruse.creditagreement.sign 的  extra_param入参onceToken（授权后5分钟内，单次有效

try {
    $result = $apiInstance->query($connKey, $onceToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthCloudresumeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connKey** | **string**| 长效的认证令牌：zhima.credit.payafteruse.creditagreement.sign 的out_agreement_no | [optional]
 **onceToken** | **string**| 交换云简历的单次token：zhima.credit.payafteruse.creditagreement.sign 的  extra_param入参onceToken（授权后5分钟内，单次有效 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthCloudresumeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
