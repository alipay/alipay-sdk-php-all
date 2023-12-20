# Alipay\OpenAPISDK\AlipayOpenAppServiceSchemaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenAppServiceSchemaApi.md#query) | **GET** /v3/alipay/open/app/service/schema/query | 服务schema下发


## `query()`

```php
query($categoryId, $templateType): \Alipay\OpenAPISDK\Model\AlipayOpenAppServiceSchemaQueryResponseModel
```

服务schema下发

服务schema查询下发

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppServiceSchemaApi(
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

$categoryId = c11111; // string | 类目id, 获取请参考<a href=\"https://opendocs.alipay.com/mini/03ci0w?pathHash=ed3c875c\">各个行业场景服务接入资料</a>
$templateType = DEFAULT; // string | 服务模版类型，默认值:DEFAULT

try {
    $result = $apiInstance->query($categoryId, $templateType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppServiceSchemaApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**| 类目id, 获取请参考&lt;a href&#x3D;\&quot;https://opendocs.alipay.com/mini/03ci0w?pathHash&#x3D;ed3c875c\&quot;&gt;各个行业场景服务接入资料&lt;/a&gt; | [optional]
 **templateType** | **string**| 服务模版类型，默认值:DEFAULT | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppServiceSchemaQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
