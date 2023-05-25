# Alipay\OpenAPISDK\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#create) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/create | 新增开票规则
[**modify()**](AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#modify) | **POST** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/modify | 修改开票规则
[**query()**](AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi.md#query) | **GET** /v3/alipay/ebpp/invoice/enterpriseconsume/enterpriseopenrule/query | 查询开票规则


## `create()`

```php
create($alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateResponseModel
```

新增开票规则

新增一条开票规则配置

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi(
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

$alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyResponseModel
```

修改开票规则

修改开票规则

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi(
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

$alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel

try {
    $result = $apiInstance->modify($alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($enterpriseId, $invoiceRuleId, $accountId, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleQueryResponseModel
```

查询开票规则

根据开票规则ID查询开票规则详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi(
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

$enterpriseId = 2088000194958955; // string | 企业ID
$invoiceRuleId = 2021032900152710950000000001; // string | 开票规则ID
$accountId = 2088000194958956; // string | 共同账户ID
$agreementNo = 20215425001112341234; // string | 授权签约协议号

try {
    $result = $apiInstance->query($enterpriseId, $invoiceRuleId, $accountId, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业ID | [optional]
 **invoiceRuleId** | **string**| 开票规则ID | [optional]
 **accountId** | **string**| 共同账户ID | [optional]
 **agreementNo** | **string**| 授权签约协议号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceEnterpriseconsumeEnterpriseopenruleQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
