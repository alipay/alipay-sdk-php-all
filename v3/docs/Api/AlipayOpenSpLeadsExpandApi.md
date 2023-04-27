# Alipay\OpenAPISDK\AlipayOpenSpLeadsExpandApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenSpLeadsExpandApi.md#create) | **POST** /v3/alipay/open/sp/leads/expand/create | 在线写入商机库


## `create()`

```php
create($alipayOpenSpLeadsExpandCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpLeadsExpandCreateResponseModel
```

在线写入商机库

在线写入商机库

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpLeadsExpandApi(
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

$alipayOpenSpLeadsExpandCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpLeadsExpandCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpLeadsExpandCreateModel

try {
    $result = $apiInstance->create($alipayOpenSpLeadsExpandCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpLeadsExpandApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpLeadsExpandCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpLeadsExpandCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpLeadsExpandCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
