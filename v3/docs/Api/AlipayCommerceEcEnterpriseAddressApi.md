# Alipay\OpenAPISDK\AlipayCommerceEcEnterpriseAddressApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayCommerceEcEnterpriseAddressApi.md#add) | **POST** /v3/alipay/commerce/ec/enterprise/address | 企业地址添加
[**modify()**](AlipayCommerceEcEnterpriseAddressApi.md#modify) | **PUT** /v3/alipay/commerce/ec/enterprise/address | 企业地址修改
[**query()**](AlipayCommerceEcEnterpriseAddressApi.md#query) | **GET** /v3/alipay/commerce/ec/enterprise/address | 企业地址查询


## `add()`

```php
add($alipayCommerceEcEnterpriseAddressAddModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressAddResponseModel
```

企业地址添加

企业地址添加

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseAddressApi(
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

$alipayCommerceEcEnterpriseAddressAddModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressAddModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressAddModel

try {
    $result = $apiInstance->add($alipayCommerceEcEnterpriseAddressAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseAddressApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEnterpriseAddressAddModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayCommerceEcEnterpriseAddressModifyModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressModifyResponseModel
```

企业地址修改

企业地址修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseAddressApi(
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

$alipayCommerceEcEnterpriseAddressModifyModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressModifyModel

try {
    $result = $apiInstance->modify($alipayCommerceEcEnterpriseAddressModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseAddressApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEcEnterpriseAddressModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($enterpriseId, $accountId, $agreementNo, $addressId, $cityCode, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressQueryResponseModel
```

企业地址查询

查询企业地址信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEnterpriseAddressApi(
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

$enterpriseId = 2088501312695783; // string | 通过企业码2.0签约接口签约，只填写企业id，无需填写共同账户id和授权签约协议号。
$accountId = 2088501312612345; // string | 通过企业码1.0接口签约的共同账户，和agreement_no搭配使用。
$agreementNo = 20215425001181407500; // string | 可通过签约消息获取。配合共同账户id使用，当填写企业共同账户id时，此字段必填。
$addressId = 1903501312695783; // string | 地址id
$cityCode = 310023; // string | 市
$pageNum = 1; // int | 页码从1开始
$pageSize = 20; // int | 每页数据

try {
    $result = $apiInstance->query($enterpriseId, $accountId, $agreementNo, $addressId, $cityCode, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEnterpriseAddressApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 通过企业码2.0签约接口签约，只填写企业id，无需填写共同账户id和授权签约协议号。 | [optional]
 **accountId** | **string**| 通过企业码1.0接口签约的共同账户，和agreement_no搭配使用。 | [optional]
 **agreementNo** | **string**| 可通过签约消息获取。配合共同账户id使用，当填写企业共同账户id时，此字段必填。 | [optional]
 **addressId** | **string**| 地址id | [optional]
 **cityCode** | **string**| 市 | [optional]
 **pageNum** | **int**| 页码从1开始 | [optional]
 **pageSize** | **int**| 每页数据 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEnterpriseAddressQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
