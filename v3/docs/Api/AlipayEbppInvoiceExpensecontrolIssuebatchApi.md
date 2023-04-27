# Alipay\OpenAPISDK\AlipayEbppInvoiceExpensecontrolIssuebatchApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayEbppInvoiceExpensecontrolIssuebatchApi.md#cancel) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/issuebatch/cancel | 作废额度发放
[**create()**](AlipayEbppInvoiceExpensecontrolIssuebatchApi.md#create) | **POST** /v3/alipay/ebpp/invoice/expensecontrol/issuebatch/create | 手动发放额度接口


## `cancel()`

```php
cancel($alipayEbppInvoiceExpensecontrolIssuebatchCancelModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCancelResponseModel
```

作废额度发放

通过发放批次id，作废当前批次下发放的额度

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolIssuebatchApi(
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

$alipayEbppInvoiceExpensecontrolIssuebatchCancelModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCancelModel

try {
    $result = $apiInstance->cancel($alipayEbppInvoiceExpensecontrolIssuebatchCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolIssuebatchApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolIssuebatchCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCancelModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCancelResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayEbppInvoiceExpensecontrolIssuebatchCreateModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCreateResponseModel
```

手动发放额度接口

通过该接口对企业下的员工进行批量的额度发放。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceExpensecontrolIssuebatchApi(
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

$alipayEbppInvoiceExpensecontrolIssuebatchCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel

try {
    $result = $apiInstance->create($alipayEbppInvoiceExpensecontrolIssuebatchCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceExpensecontrolIssuebatchApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceExpensecontrolIssuebatchCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceExpensecontrolIssuebatchCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
