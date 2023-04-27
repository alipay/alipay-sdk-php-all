# Alipay\OpenAPISDK\AlipayOpenMiniCategoryRequireApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniCategoryRequireApi.md#query) | **POST** /v3/alipay/open/mini/category/require/query | 查询类目所需资质信息


## `query()`

```php
query($alipayOpenMiniCategoryRequireQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryRequireQueryResponseModel
```

查询类目所需资质信息

查询类目所需资质信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniCategoryRequireApi(
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

$alipayOpenMiniCategoryRequireQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryRequireQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryRequireQueryModel

try {
    $result = $apiInstance->query($alipayOpenMiniCategoryRequireQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniCategoryRequireApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniCategoryRequireQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryRequireQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniCategoryRequireQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
