# Alipay\OpenAPISDK\AlipayCommerceEcJointaccountbillDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayCommerceEcJointaccountbillDetailApi.md#batchquery) | **GET** /v3/alipay/commerce/ec/jointaccountbill/detail/batchquery | 企业账单批量分页查询


## `batchquery()`

```php
batchquery($enterpriseId, $bizScene, $userId, $openId, $employeeId, $pageNum, $pageSize, $startDate, $endDate): \Alipay\OpenAPISDK\Model\AlipayCommerceEcJointaccountbillDetailBatchqueryResponseModel
```

企业账单批量分页查询

分页查询企业账单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcJointaccountbillDetailApi(
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

$enterpriseId = 2088123456789000; // string | 企业ID
$bizScene = ISV_DEFAULT; // string | 业务场景。不传默认为ISV_DEFAULT
$userId = 2088123456789000; // string | 员工支付宝UID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 员工支付宝UID
$employeeId = 2288029541813166; // string | 员工id
$pageNum = 1; // string | 页码
$pageSize = 20; // string | 每页大小
$startDate = yyyy-MM-dd HH:mm:ss; // string | 起始日期
$endDate = yyyy-MM-dd HH:mm:ss; // string | 截止日期

try {
    $result = $apiInstance->batchquery($enterpriseId, $bizScene, $userId, $openId, $employeeId, $pageNum, $pageSize, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcJointaccountbillDetailApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **bizScene** | **string**| 业务场景。不传默认为ISV_DEFAULT | [optional]
 **userId** | **string**| 员工支付宝UID | [optional]
 **openId** | **string**| 员工支付宝UID | [optional]
 **employeeId** | **string**| 员工id | [optional]
 **pageNum** | **string**| 页码 | [optional]
 **pageSize** | **string**| 每页大小 | [optional]
 **startDate** | **string**| 起始日期 | [optional]
 **endDate** | **string**| 截止日期 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcJointaccountbillDetailBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
