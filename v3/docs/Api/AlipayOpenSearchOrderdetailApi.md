# Alipay\OpenAPISDK\AlipayOpenSearchOrderdetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSearchOrderdetailApi.md#query) | **POST** /v3/alipay/open/search/orderdetail/query | 查询搜索服务工单的详细信息


## `query()`

```php
query($alipayOpenSearchOrderdetailQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchOrderdetailQueryResponseModel
```

查询搜索服务工单的详细信息

查询搜索服务工单的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchOrderdetailApi(
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

$alipayOpenSearchOrderdetailQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchOrderdetailQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchOrderdetailQueryModel

try {
    $result = $apiInstance->query($alipayOpenSearchOrderdetailQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchOrderdetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchOrderdetailQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchOrderdetailQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchOrderdetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
