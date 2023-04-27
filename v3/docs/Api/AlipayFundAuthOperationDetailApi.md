# Alipay\OpenAPISDK\AlipayFundAuthOperationDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundAuthOperationDetailApi.md#query) | **POST** /v3/alipay/fund/auth/operation/detail/query | 资金授权操作查询接口


## `query()`

```php
query($alipayFundAuthOperationDetailQueryModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationDetailQueryResponseModel
```

资金授权操作查询接口

通过该接口可以查询单笔明细的详细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOperationDetailApi(
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

$alipayFundAuthOperationDetailQueryModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationDetailQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationDetailQueryModel

try {
    $result = $apiInstance->query($alipayFundAuthOperationDetailQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOperationDetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOperationDetailQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOperationDetailQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOperationDetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
