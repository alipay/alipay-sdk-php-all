# Alipay\OpenAPISDK\AlipayCommerceEcEnterpriseApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayCommerceEcEnterpriseApi.md#create) | **POST** /v3/alipay/commerce/ec/enterprise/create | 企业入驻
[**delete()**](AlipayCommerceEcEnterpriseApi.md#delete) | **POST** /v3/alipay/commerce/ec/enterprise/delete | 企业注销
[**unsign()**](AlipayCommerceEcEnterpriseApi.md#unsign) | **GET** /v3/alipay/commerce/ec/enterprise/unsignurl | 企业解约


## `create()`

```php
create($alipayCommerceEcEnterpriseCreateModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseCreateResponseModel
```

企业入驻

企业入驻，并返回签约链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseApi(
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

$alipayCommerceEcEnterpriseCreateModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseCreateModel

try {
    $result = $apiInstance->create($alipayCommerceEcEnterpriseCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEnterpriseCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($alipayCommerceEcEnterpriseDeleteModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseDeleteResponseModel
```

企业注销

企业注销，清理企业数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseApi(
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

$alipayCommerceEcEnterpriseDeleteModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseDeleteModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseDeleteModel

try {
    $result = $apiInstance->delete($alipayCommerceEcEnterpriseDeleteModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEnterpriseDeleteModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseDeleteModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unsign()`

```php
unsign($enterpriseId, $accountId, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseUnsignResponseModel
```

企业解约

企业解约，获取解约链接，点击链接跳转到解约页面，进行解约协议

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseApi(
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

$enterpriseId = 2088123412341234; // string | 通过企业码2.0签约接口签约，只填写企业id，无需填写共同账户id和授权签约协议号。
$accountId = 2088000194958956; // string | 通过企业码1.0接口签约的共同账户，和agreement_no搭配使用。
$agreementNo = 20215425001181407500; // string | 可通过签约消息获取。配合共同账户id使用，当填写企业共同账户id时，此字段必填。

try {
    $result = $apiInstance->unsign($enterpriseId, $accountId, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseApi->unsign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 通过企业码2.0签约接口签约，只填写企业id，无需填写共同账户id和授权签约协议号。 | [optional]
 **accountId** | **string**| 通过企业码1.0接口签约的共同账户，和agreement_no搭配使用。 | [optional]
 **agreementNo** | **string**| 可通过签约消息获取。配合共同账户id使用，当填写企业共同账户id时，此字段必填。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseUnsignResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
