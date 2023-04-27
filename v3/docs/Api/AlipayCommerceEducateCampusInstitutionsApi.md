# Alipay\OpenAPISDK\AlipayCommerceEducateCampusInstitutionsApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayCommerceEducateCampusInstitutionsApi.md#add) | **POST** /v3/alipay/commerce/educate/campus/institutions/add | 入驻学校信息
[**query()**](AlipayCommerceEducateCampusInstitutionsApi.md#query) | **GET** /v3/alipay/commerce/educate/campus/institutions/query | 查询学校信息


## `add()`

```php
add($alipayCommerceEducateCampusInstitutionsAddModel): \Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsAddResponseModel
```

入驻学校信息

学校信息入驻

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEducateCampusInstitutionsApi(
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

$alipayCommerceEducateCampusInstitutionsAddModel = new \Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsAddModel(); // \Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsAddModel

try {
    $result = $apiInstance->add($alipayCommerceEducateCampusInstitutionsAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEducateCampusInstitutionsApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayCommerceEducateCampusInstitutionsAddModel** | **\Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($instName, $provinceCode, $cityCode, $instId, $instStdCode, $likeProperty): \Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsQueryResponseModel
```

查询学校信息

可以通过学校库产品查询支付宝系统中是否已存在对应的学校，避免重复入驻，以及通过该接口查询入驻的进度：入驻成功则会返回学校信息，失败则不会返回

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEducateCampusInstitutionsApi(
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

$instName = 复旦大学; // string | 学校名称
$provinceCode = 370000; // string | 省份编码，编码标准为中华人民共和国行政区划代码，参见 2020年12月中华人民共和国县以上行政区划代码。
$cityCode = 370900; // string | 城市编码，编码标准为中华人民共和国行政区划代码，参见 2020年12月中华人民共和国县以上行政区划代码。
$instId = 2088000139662311; // string | 学校内标：支付宝内部学校唯一编号。使用内标查询时，默认使用内标进行精确匹配。
$instStdCode = 202008016104; // string | 学校外标：统一社会信用编码或教育部提供的学校标识码。使用学校外标查询时，默认使用外标进行精确匹配。
$likeProperty = 1; // string | 是否使用学校名称模糊匹配进行查询，默认精确匹配。 枚举值如下： 1：精确匹配； 0：模糊匹配

try {
    $result = $apiInstance->query($instName, $provinceCode, $cityCode, $instId, $instStdCode, $likeProperty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEducateCampusInstitutionsApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instName** | **string**| 学校名称 | [optional]
 **provinceCode** | **string**| 省份编码，编码标准为中华人民共和国行政区划代码，参见 2020年12月中华人民共和国县以上行政区划代码。 | [optional]
 **cityCode** | **string**| 城市编码，编码标准为中华人民共和国行政区划代码，参见 2020年12月中华人民共和国县以上行政区划代码。 | [optional]
 **instId** | **string**| 学校内标：支付宝内部学校唯一编号。使用内标查询时，默认使用内标进行精确匹配。 | [optional]
 **instStdCode** | **string**| 学校外标：统一社会信用编码或教育部提供的学校标识码。使用学校外标查询时，默认使用外标进行精确匹配。 | [optional]
 **likeProperty** | **string**| 是否使用学校名称模糊匹配进行查询，默认精确匹配。 枚举值如下： 1：精确匹配； 0：模糊匹配 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEducateCampusInstitutionsQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
