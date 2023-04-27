# Alipay\OpenAPISDK\AlipayEbppInvoiceEinvpackageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEbppInvoiceEinvpackageApi.md#query) | **GET** /v3/alipay/ebpp/invoice/einvpackage/query | 查询用户发票包的明细信息


## `query()`

```php
query($encryptedUid, $packageId): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEinvpackageQueryResponseModel
```

查询用户发票包的明细信息

第三方报销软件根据支付宝提供的用户的发票包id，查询对应的发票包的电子发票，ocr纸票和消费记录明细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEinvpackageApi(
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

$encryptedUid = Zhm4AKUE8ShJK6FYfKmk; // string | 加密过的uid。获取详情参见 <a href=\"https://opendocs.alipay.com/open/017fwh\">\"推\"模式发票报销</a>。
$packageId = 202004150000000000000000000; // string | 发票包id。获取详情参见 <a href=\"https://opendocs.alipay.com/open/017fwh\">\"推\"模式发票报销</a>。

try {
    $result = $apiInstance->query($encryptedUid, $packageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEinvpackageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encryptedUid** | **string**| 加密过的uid。获取详情参见 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/open/017fwh\&quot;&gt;\&quot;推\&quot;模式发票报销&lt;/a&gt;。 | [optional]
 **packageId** | **string**| 发票包id。获取详情参见 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/open/017fwh\&quot;&gt;\&quot;推\&quot;模式发票报销&lt;/a&gt;。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEinvpackageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
