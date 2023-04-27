# Alipay\OpenAPISDK\AlipayCommerceEcEnterpriseAgreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcEnterpriseAgreementApi.md#query) | **GET** /v3/alipay/commerce/ec/enterprise/agreement | 查询企业签约企业码信息


## `query()`

```php
query($enterpriseId, $accountId): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAgreementQueryResponseModel
```

查询企业签约企业码信息

查询企业签约企业码信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseAgreementApi(
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

$enterpriseId = 2088441399627416; // string | 企业id；enterprise_id与account_id至少传一个，如果都传了优先使用enterprise_id
$accountId = 2088610274867962; // string | 资金共同账号id；enterprise_id与account_id至少传一个，如果都传了优先使用enterprise_id

try {
    $result = $apiInstance->query($enterpriseId, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseAgreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业id；enterprise_id与account_id至少传一个，如果都传了优先使用enterprise_id | [optional]
 **accountId** | **string**| 资金共同账号id；enterprise_id与account_id至少传一个，如果都传了优先使用enterprise_id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAgreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
