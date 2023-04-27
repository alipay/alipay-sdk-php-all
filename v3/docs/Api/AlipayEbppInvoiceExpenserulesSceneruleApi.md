# Alipay\OpenAPISDK\AlipayEbppInvoiceExpenserulesSceneruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceExpenserulesSceneruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expenserules/scenerule/create | 创建费控规则
[**modify()**](AlipayEbppInvoiceExpenserulesSceneruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/expenserules/scenerule/modify | 修改费控规则
[**query()**](AlipayEbppInvoiceExpenserulesSceneruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/expenserules/scenerule/query | 查询费控规则信息


## `create()`

```php
create($alipayEbppInvoiceExpenserulesSceneruleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleCreateResponseModel
```

创建费控规则

创建费控规则，例如：创建一条有效期为2021-08-01 00:00:00到2031-08-01 00:00:00的福利餐费控规则，限制对应员工的单日消费金额不超过100元；

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesSceneruleApi(
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

$alipayEbppInvoiceExpenserulesSceneruleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceExpenserulesSceneruleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesSceneruleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesSceneruleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceExpenserulesSceneruleModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleModifyResponseModel
```

修改费控规则

修改费控规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesSceneruleApi(
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

$alipayEbppInvoiceExpenserulesSceneruleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceExpenserulesSceneruleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesSceneruleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpenserulesSceneruleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($accountId, $agreementNo, $enterpriseId, $standardId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleQueryResponseModel
```

查询费控规则信息

查询费控规则信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpenserulesSceneruleApi(
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

$accountId = 2088000194958956; // string | 企业ID
$agreementNo = 20215425001112341234; // string | 授权签约协议号
$enterpriseId = 2088000194958956; // string | 企业码企业id
$standardId = 20215425001112341234; // string | 费控规则ID
$pageNum = 1; // int | 页数
$pageSize = 10; // int | 页大小

try {
    $result = $apiInstance->query($accountId, $agreementNo, $enterpriseId, $standardId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpenserulesSceneruleApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| 企业ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]
 **enterpriseId** | **string**| 企业码企业id | [optional]
 **standardId** | **string**| 费控规则ID | [optional]
 **pageNum** | **int**| 页数 | [optional]
 **pageSize** | **int**| 页大小 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpenserulesSceneruleQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
