# Alipay\OpenAPISDK\AlipayOpenAgentMobilepayApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sign()**](AlipayOpenAgentMobilepayApi.md#sign) | **POST** /v3/alipay/open/agent/mobilepay/sign | 代签约APP支付产品


## `sign()`

```php
sign($appAuthPic, $appDemo, $businessLicenseAuthPic, $businessLicensePic, $data, $homeScreenshot, $inAppScreenshot, $payScreenshot, $specialLicensePic): object
```

代签约APP支付产品

三方应用代理签约APP支付产品，需要配合开启事务接口使用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentMobilepayApi(
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

$appAuthPic = "/path/to/file.txt"; // \SplFileObject
$appDemo = "/path/to/file.txt"; // \SplFileObject
$businessLicenseAuthPic = "/path/to/file.txt"; // \SplFileObject
$businessLicensePic = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentMobilepaySignModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentMobilepaySignModel
$homeScreenshot = "/path/to/file.txt"; // \SplFileObject
$inAppScreenshot = "/path/to/file.txt"; // \SplFileObject
$payScreenshot = "/path/to/file.txt"; // \SplFileObject
$specialLicensePic = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->sign($appAuthPic, $appDemo, $businessLicenseAuthPic, $businessLicensePic, $data, $homeScreenshot, $inAppScreenshot, $payScreenshot, $specialLicensePic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentMobilepayApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appAuthPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **appDemo** | **\SplFileObject****\SplFileObject**|  | [optional]
 **businessLicenseAuthPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **businessLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentMobilepaySignModel**|  | [optional]
 **homeScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **inAppScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **payScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
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
