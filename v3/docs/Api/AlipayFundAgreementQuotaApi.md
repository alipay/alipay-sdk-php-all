# Alipay\OpenAPISDK\AlipayFundAgreementQuotaApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayFundAgreementQuotaApi.md#modify) | **POST** /v3/alipay/fund/agreement/quota/modify | 额度设置接口
[**query()**](AlipayFundAgreementQuotaApi.md#query) | **POST** /v3/alipay/fund/agreement/quota/query | 额度查询接口


## `modify()`

```php
modify($alipayFundAgreementQuotaModifyModel): \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaModifyResponseModel
```

额度设置接口

基于扣款合约设置付款方额度

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAgreementQuotaApi(
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

$alipayFundAgreementQuotaModifyModel = new \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaModifyModel

try {
    $result = $apiInstance->modify($alipayFundAgreementQuotaModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAgreementQuotaApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAgreementQuotaModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($alipayFundAgreementQuotaQueryModel): \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaQueryResponseModel
```

额度查询接口

查询基于扣款协议的额度配置查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundAgreementQuotaApi(
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

$alipayFundAgreementQuotaQueryModel = new \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaQueryModel

try {
    $result = $apiInstance->query($alipayFundAgreementQuotaQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundAgreementQuotaApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundAgreementQuotaQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundAgreementQuotaQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
