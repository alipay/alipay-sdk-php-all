# Alipay\OpenAPISDK\AlipayFundAuthOperationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel()**](AlipayFundAuthOperationApi.md#cancel) | **POST** /v3/alipay/fund/auth/operation/cancel | 资金授权撤销接口


## `cancel()`

```php
cancel($alipayFundAuthOperationCancelModel): \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationCancelResponseModel
```

资金授权撤销接口

只有商户由于业务系统处理超时需要终止后续业务处理或者授权结果未知时可调用撤销，其他正常授权冻结的操作如需实现相同功能请调用资金授权解冻服务。提交资金授权后调用【资金授权操作查询】，没有明确的授权结果再调用【资金授权撤销】

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAuthOperationApi(
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

$alipayFundAuthOperationCancelModel = new \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAuthOperationCancelModel

try {
    $result = $apiInstance->cancel($alipayFundAuthOperationCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAuthOperationApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAuthOperationCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAuthOperationCancelModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAuthOperationCancelResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
