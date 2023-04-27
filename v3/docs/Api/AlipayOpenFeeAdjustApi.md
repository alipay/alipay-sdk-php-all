# Alipay\OpenAPISDK\AlipayOpenFeeAdjustApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenFeeAdjustApi.md#apply) | **POST** /v3/alipay/open/fee/adjust/apply | 特殊费率申请


## `apply()`

```php
apply($attachment, $certPic, $data, $shopScenePic, $shopSignPic): object
```

特殊费率申请

服务商替代签约或交易传参的商户申请费率

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenFeeAdjustApi(
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

$attachment = "/path/to/file.txt"; // \SplFileObject
$certPic = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenFeeAdjustApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenFeeAdjustApplyModel
$shopScenePic = "/path/to/file.txt"; // \SplFileObject
$shopSignPic = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apply($attachment, $certPic, $data, $shopScenePic, $shopSignPic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenFeeAdjustApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment** | **\SplFileObject****\SplFileObject**|  | [optional]
 **certPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenFeeAdjustApplyModel**|  | [optional]
 **shopScenePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **shopSignPic** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
