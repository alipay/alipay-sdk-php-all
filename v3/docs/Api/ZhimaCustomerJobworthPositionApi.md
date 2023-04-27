# Alipay\OpenAPISDK\ZhimaCustomerJobworthPositionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](ZhimaCustomerJobworthPositionApi.md#add) | **POST** /v3/zhima/customer/jobworth/position/add | 职得工作证岗位收集


## `add()`

```php
add($zhimaCustomerJobworthPositionAddModel): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPositionAddResponseModel
```

职得工作证岗位收集

保存商户传入岗位信息，当接口调用成功，业务问题时返回subcode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthPositionApi(
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

$zhimaCustomerJobworthPositionAddModel = new \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPositionAddModel(); // \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPositionAddModel

try {
    $result = $apiInstance->add($zhimaCustomerJobworthPositionAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthPositionApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCustomerJobworthPositionAddModel** | **\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPositionAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthPositionAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
