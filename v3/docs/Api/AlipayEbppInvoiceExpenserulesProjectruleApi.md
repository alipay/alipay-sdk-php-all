# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesProjectruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceExpenserulesProjectruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expenserules/projectrule/create | 创建项目费控规则
[**query()**](AlipayEbppInvoiceExpenserulesProjectruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/projectrule/query | 查询项目费控规则


## `create()`

```php
create($alipayEbppInvoiceExpenserulesProjectruleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleCreateResponseModel
```

创建项目费控规则

创建项目费控规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesProjectruleApi(
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

$alipayEbppInvoiceExpenserulesProjectruleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceExpenserulesProjectruleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesProjectruleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesProjectruleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($accountId, $agreementNo, $projectId, $employeeId, $employeeOpenId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleQueryResponseModel
```

查询项目费控规则

查询项目费控规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesProjectruleApi(
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

$accountId = 2088000194958956; // string | 共同账号ID
$agreementNo = 20215425001112341234; // string | 授权签约协议号
$projectId = 2021063000152700000000000000; // string | 项目id（可空）
$employeeId = 2088123412341234; // string | 员工UID（可空）
$employeeOpenId = abcdxxxx; // string | 切换open_id后请使用：员工open_id（可空）
$pageNum = 1; // int | 页数
$pageSize = 20; // int | 页大小

try {
    $result = $apiInstance->query($accountId, $agreementNo, $projectId, $employeeId, $employeeOpenId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesProjectruleApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 共同账号ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **projectId** | **string**| 项目id（可空） | [optional]
 **employeeId** | **string**| 员工UID（可空） | [optional]
 **employeeOpenId** | **string**| 切换open_id后请使用：员工open_id（可空） | [optional]
 **pageNum** | **int**| 页数 | [optional]
 **pageSize** | **int**| 页大小 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesProjectruleQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
