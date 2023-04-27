# Alipay\OpenAPISDK\AlipayFundJointaccountBillApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayFundJointaccountBillApi.md#query) | **GET** /v3/alipay/fund/jointaccount/bill/query | 因公付账单查询


## `query()`

```php
query($productCode, $bizScene, $accountId, $pageNum, $pageSize, $userId, $openId, $startDate, $endDate, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountBillQueryResponseModel
```

因公付账单查询

因公付账单查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountBillApi(
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

$productCode = ENTERPRISE_PAY; // string | 因公付产品码
$bizScene = DEFAULT; // string | 业务场景
$accountId = 2088900976746215; // string | 账户ID
$pageNum = 1; // string | 采用分页查询，本参数为空或0默认显示第一页。如果输入的值大于总页数，则支付宝返回最后一页数据
$pageSize = 1; // string | 每页大小，不传的情况下默认20条，超过20条默认按20条查询；不足20条则按实际记录数返回
$userId = 2088900976746215; // string | 员工ID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 员工的openId
$startDate = yyyy-MM-dd; // string | 起始日期
$endDate = yyyy-MM-dd; // string | 截止日期
$agreementNo = 2088900976746215123123; // string | 授权协议号

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountId, $pageNum, $pageSize, $userId, $openId, $startDate, $endDate, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountBillApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 因公付产品码 | [optional]
 **bizScene** | **string**| 业务场景 | [optional]
 **accountId** | **string**| 账户ID | [optional]
 **pageNum** | **string**| 采用分页查询，本参数为空或0默认显示第一页。如果输入的值大于总页数，则支付宝返回最后一页数据 | [optional]
 **pageSize** | **string**| 每页大小，不传的情况下默认20条，超过20条默认按20条查询；不足20条则按实际记录数返回 | [optional]
 **userId** | **string**| 员工ID | [optional]
 **openId** | **string**| 员工的openId | [optional]
 **startDate** | **string**| 起始日期 | [optional]
 **endDate** | **string**| 截止日期 | [optional]
 **agreementNo** | **string**| 授权协议号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountBillQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
