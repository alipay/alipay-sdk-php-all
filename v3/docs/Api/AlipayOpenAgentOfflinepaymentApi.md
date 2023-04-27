# Alipay\OpenAPISDK\AlipayOpenAgentOfflinepaymentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sign()**](AlipayOpenAgentOfflinepaymentApi.md#sign) | **POST** /v3/alipay/open/agent/offlinepayment/sign | 代签约当面付快捷版产品


## `sign()`

```php
sign($businessLicensePic, $data, $shopScenePic, $shopSignBoardPic, $specialLicensePic): object
```

代签约当面付快捷版产品

三方应用代理签约当面付快捷版产品，需要配合开启事务接口使用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentOfflinepaymentApi(
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

$businessLicensePic = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentOfflinepaymentSignModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentOfflinepaymentSignModel
$shopScenePic = "/path/to/file.txt"; // \SplFileObject
$shopSignBoardPic = "/path/to/file.txt"; // \SplFileObject
$specialLicensePic = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->sign($businessLicensePic, $data, $shopScenePic, $shopSignBoardPic, $specialLicensePic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentOfflinepaymentApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentOfflinepaymentSignModel**|  | [optional]
 **shopScenePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **shopSignBoardPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **specialLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
