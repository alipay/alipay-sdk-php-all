# Alipay\OpenAPISDK\ZhimaCustomerJobworthJobdataApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](ZhimaCustomerJobworthJobdataApi.md#add) | **POST** /v3/zhima/customer/jobworth/jobdata/add | 工作证职业数据回流接口


## `add()`

```php
add($zhimaCustomerJobworthJobdataAddModel): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthJobdataAddResponseModel
```

工作证职业数据回流接口

合作的三方伙伴通过该接口，将数据回传到工作证

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthJobdataApi(
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

$zhimaCustomerJobworthJobdataAddModel = new \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthJobdataAddModel(); // \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthJobdataAddModel

try {
    $result = $apiInstance->add($zhimaCustomerJobworthJobdataAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthJobdataApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaCustomerJobworthJobdataAddModel** | **\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthJobdataAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthJobdataAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
