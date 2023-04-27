# Alipay\OpenAPISDK\AlipayOpenSpOperationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenSpOperationApi.md#apply) | **POST** /v3/alipay/open/sp/operation/apply | 向商户发起代运营操作


## `apply()`

```php
apply($alipayOpenSpOperationApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpOperationApplyResponseModel
```

向商户发起代运营操作

服务商向商户发起代运营操作（账号绑定或者代运营授权）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpOperationApi(
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

$alipayOpenSpOperationApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpOperationApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpOperationApplyModel

try {
    $result = $apiInstance->apply($alipayOpenSpOperationApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpOperationApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpOperationApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpOperationApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpOperationApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
