# Alipay\OpenAPISDK\AlipayTradeBatchTransferApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayTradeBatchTransferApi.md#query) | **GET** /v3/alipay/trade/batch/transfer/query | 请款分账查询接口


## `query()`

```php
query($outRequestNo, $settleNo, $extendParams): \Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferQueryResponseModel
```

请款分账查询接口

针对请款分账接口的查询功能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeBatchTransferApi(
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

$outRequestNo = 20180101; // string | 批量结算时传入的外部流水号，与settle_no二者必填其一。 out_request_no和settle_no如果同时存在，优先取settle_no
$settleNo = 2019050510032002040000053220; // string | 结算单据号，与out_request_no二者必填其一
$extendParams = {"key":"value"}; // string | 扩展字段

try {
    $result = $apiInstance->query($outRequestNo, $settleNo, $extendParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeBatchTransferApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outRequestNo** | **string**| 批量结算时传入的外部流水号，与settle_no二者必填其一。 out_request_no和settle_no如果同时存在，优先取settle_no | [optional]
 **settleNo** | **string**| 结算单据号，与out_request_no二者必填其一 | [optional]
 **extendParams** | **string**| 扩展字段 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeBatchTransferQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
