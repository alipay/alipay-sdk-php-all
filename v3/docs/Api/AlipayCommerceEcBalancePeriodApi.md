# Alipay\OpenAPISDK\AlipayCommerceEcBalancePeriodApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayCommerceEcBalancePeriodApi.md#modify) | **POST** /v3/alipay/commerce/ec/balance/period/modify | 企业码月对账单账期修改


## `modify()`

```php
modify($alipayCommerceEcBalancePeriodModifyModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcBalancePeriodModifyResponseModel
```

企业码月对账单账期修改

用于在企业码B端后台创建的企业调整月对账单账期

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcBalancePeriodApi(
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

$alipayCommerceEcBalancePeriodModifyModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcBalancePeriodModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcBalancePeriodModifyModel

try {
    $result = $apiInstance->modify($alipayCommerceEcBalancePeriodModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcBalancePeriodApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcBalancePeriodModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcBalancePeriodModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcBalancePeriodModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
