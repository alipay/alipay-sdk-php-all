# Alipay\OpenAPISDK\AlipayOpenAppApiSceneApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAppApiSceneApi.md#query) | **GET** /v3/alipay/open/app/api/scene/query | 查询接口字段使用场景


## `query()`

```php
query($fieldName, $apiName): \Alipay\OpenAPISDK\Model\AlipayOpenAppApiSceneQueryResponseModel
```

查询接口字段使用场景

在申请接口出参中用户敏感信息字段时，本接口用于获取所申请接口字段的使用场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppApiSceneApi(
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

$fieldName = mobile; // string | 接口出参字段英文名。
$apiName = alipay.user.info.share; // string | 接口英文名。

try {
    $result = $apiInstance->query($fieldName, $apiName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppApiSceneApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldName** | **string**| 接口出参字段英文名。 | [optional]
 **apiName** | **string**| 接口英文名。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppApiSceneQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
