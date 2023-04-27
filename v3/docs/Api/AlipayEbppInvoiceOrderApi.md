# Alipay\OpenAPISDK\AlipayEbppInvoiceOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceOrderApi.md#query) | **GET** /v3/alipay/ebpp/invoice/order/query | 根据外部订单号查询发票信息


## `query()`

```php
query($orderNo, $mShortName, $subMShortName): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceOrderQueryResponseModel
```

根据外部订单号查询发票信息

根据外部订单号查询发票详情信息，适用于外部商户无开票申请ID场景

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceOrderApi(
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

$orderNo = 20200520110046966071; // string | 开票申请时所传入订单号，不限于支付宝体内交易订单号。如：20200520110046966071
$mShortName = KFC; // string | 定义商户的一级简称,用于标识商户品牌，对应于商户入驻时填写的\"商户品牌简称\"。 如：肯德基：KFC
$subMShortName = KFC-HZ-19003; // string | 定义商户的二级简称,用于标识商户品牌下的分支机构，如门店，对应于商户入驻时填写的\"商户门店简称\"。 如：肯德基-杭州西湖区文一西路店：KFC-HZ-19003 要求：\"商户品牌简称+商户门店简称\"作为确定商户及其下属机构的唯一标识，不可重复。

try {
    $result = $apiInstance->query($orderNo, $mShortName, $subMShortName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderNo** | **string**| 开票申请时所传入订单号，不限于支付宝体内交易订单号。如：20200520110046966071 | [optional]
 **mShortName** | **string**| 定义商户的一级简称,用于标识商户品牌，对应于商户入驻时填写的\&quot;商户品牌简称\&quot;。 如：肯德基：KFC | [optional]
 **subMShortName** | **string**| 定义商户的二级简称,用于标识商户品牌下的分支机构，如门店，对应于商户入驻时填写的\&quot;商户门店简称\&quot;。 如：肯德基-杭州西湖区文一西路店：KFC-HZ-19003 要求：\&quot;商户品牌简称+商户门店简称\&quot;作为确定商户及其下属机构的唯一标识，不可重复。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
