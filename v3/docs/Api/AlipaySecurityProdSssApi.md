# Alipay\OpenAPISDK\AlipaySecurityProdSssApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipaySecurityProdSssApi.md#query) | **POST** /v3/alipay/security/prod/sss/query/{bbb} | 金柚测试3.0接口


## `query()`

```php
query($bbb, $aaa, $aaaOpenId, $alipaySecurityProdSssQueryModel): \Alipay\OpenAPISDK\Model\AlipaySecurityProdSssQueryResponseModel
```

金柚测试3.0接口

金柚测试3.0接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipaySecurityProdSssApi(
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

$bbb = 1; // string | activity_id 词条描述
$aaa = 3333; // string | 1
$aaaOpenId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 1
$alipaySecurityProdSssQueryModel = new \Alipay\OpenAPISDK\Model\AlipaySecurityProdSssQueryModel(); // \Alipay\OpenAPISDK\Model\AlipaySecurityProdSssQueryModel

try {
    $result = $apiInstance->query($bbb, $aaa, $aaaOpenId, $alipaySecurityProdSssQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipaySecurityProdSssApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bbb** | **string**| activity_id 词条描述 |
 **aaa** | **string**| 1 | [optional]
 **aaaOpenId** | **string**| 1 | [optional]
 **alipaySecurityProdSssQueryModel** | **\Alipay\OpenAPISDK\Model\AlipaySecurityProdSssQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipaySecurityProdSssQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
