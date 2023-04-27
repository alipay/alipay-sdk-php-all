# Alipay\OpenAPISDK\AlipayFundTransPayeeBindApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundTransPayeeBindApi.md#query) | **GET** /v3/alipay/fund/trans/payee/bind/query | 资金收款账号绑定关系查询


## `query()`

```php
query($identity, $identityType): \Alipay\OpenAPISDK\Model\AlipayFundTransPayeeBindQueryResponseModel
```

资金收款账号绑定关系查询

资金收款账号绑定关系查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransPayeeBindApi(
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

$identity = 230100199901010001; // string | 证件号
$identityType = IDENTITY_CARD; // string | 证件类型,暂仅支持 IDENTITY_CARD （身份证）

try {
    $result = $apiInstance->query($identity, $identityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransPayeeBindApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identity** | **string**| 证件号 | [optional]
 **identityType** | **string**| 证件类型,暂仅支持 IDENTITY_CARD （身份证） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransPayeeBindQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
