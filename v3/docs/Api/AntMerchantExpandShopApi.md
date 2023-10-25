# Alipay\OpenAPISDK\AntMerchantExpandShopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**close()**](AntMerchantExpandShopApi.md#close) | **PATCH** /v3/ant/merchant/shop/close | 蚂蚁店铺关闭
[**consult()**](AntMerchantExpandShopApi.md#consult) | **POST** /v3/ant/merchant/expand/shop/consult | 蚂蚁店铺创建咨询
[**create()**](AntMerchantExpandShopApi.md#create) | **POST** /v3/ant/merchant/shop | 蚂蚁店铺创建
[**modify()**](AntMerchantExpandShopApi.md#modify) | **PATCH** /v3/ant/merchant/shop | 修改蚂蚁店铺
[**query()**](AntMerchantExpandShopApi.md#query) | **GET** /v3/ant/merchant/shop | 店铺查询接口


## `close()`

```php
close($antMerchantExpandShopCloseModel): object
```

蚂蚁店铺关闭

通过shop_id，关闭蚂蚁店铺。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopApi(
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

$antMerchantExpandShopCloseModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandShopCloseModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandShopCloseModel

try {
    $result = $apiInstance->close($antMerchantExpandShopCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandShopCloseModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandShopCloseModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `consult()`

```php
consult($antMerchantExpandShopConsultModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandShopConsultResponseModel
```

蚂蚁店铺创建咨询

蚂蚁店铺创建咨询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopApi(
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

$antMerchantExpandShopConsultModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandShopConsultModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandShopConsultModel

try {
    $result = $apiInstance->consult($antMerchantExpandShopConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandShopConsultModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandShopConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandShopConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($antMerchantExpandShopCreateModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandShopCreateResponseModel
```

蚂蚁店铺创建

创建蚂蚁店铺

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopApi(
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

$antMerchantExpandShopCreateModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandShopCreateModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandShopCreateModel

try {
    $result = $apiInstance->create($antMerchantExpandShopCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandShopCreateModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandShopCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandShopCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($antMerchantExpandShopModifyModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandShopModifyResponseModel
```

修改蚂蚁店铺

修改蚂蚁店铺，按信息项修改。若无特殊说明，如果某项存在但是没填写，则不会覆盖掉原来的值

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopApi(
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

$antMerchantExpandShopModifyModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandShopModifyModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandShopModifyModel

try {
    $result = $apiInstance->modify($antMerchantExpandShopModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandShopModifyModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandShopModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandShopModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($shopId, $storeId, $ipRoleId, $addressVersion, $needRecommend): \Alipay\OpenAPISDK\Model\AntMerchantExpandShopQueryResponseModel
```

店铺查询接口

用于服务商或商户查询其自己的店铺信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopApi(
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

$shopId = 2018011900502000000005124744; // string | 蚂蚁店铺id。填写本参数的话，store_id和ip_role_id可以不填
$storeId = NO0001; // string | 门店编号，表示该门店在该商户角色id(直连pid，间连smid)下，由商户自己定义的外部门店编号。关店接口中，如果没传shop_id，则本字段与ip_role_id均必填
$ipRoleId = 2088301155943087; // string | 商户角色id，表示将要开的店属于哪个商户角色。对于直连开店场景，填写商户pid；对于间连开店场景（线上、线下、直付通），填写商户smid。本接口中，如果没传shop_id，则本字段与store_id均必填
$addressVersion = 2022Q2; // string | 行政区划版本，当前可传空值(取默认版本)、2022Q2、UPTODATE(取最新版本)，其中空值默认为：2020Q1版本（ address_version=''或null），想要查看版本是2022年2季度版本则传入:(address_version='2022Q2')，想要获取最新版本则传入:(address_version ='UPTODATE')
$needRecommend = 0; // string | 门店不置信时，是否需要返回shop_recommend_info

try {
    $result = $apiInstance->query($shopId, $storeId, $ipRoleId, $addressVersion, $needRecommend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shopId** | **string**| 蚂蚁店铺id。填写本参数的话，store_id和ip_role_id可以不填 | [optional]
 **storeId** | **string**| 门店编号，表示该门店在该商户角色id(直连pid，间连smid)下，由商户自己定义的外部门店编号。关店接口中，如果没传shop_id，则本字段与ip_role_id均必填 | [optional]
 **ipRoleId** | **string**| 商户角色id，表示将要开的店属于哪个商户角色。对于直连开店场景，填写商户pid；对于间连开店场景（线上、线下、直付通），填写商户smid。本接口中，如果没传shop_id，则本字段与store_id均必填 | [optional]
 **addressVersion** | **string**| 行政区划版本，当前可传空值(取默认版本)、2022Q2、UPTODATE(取最新版本)，其中空值默认为：2020Q1版本（ address_version&#x3D;&#39;&#39;或null），想要查看版本是2022年2季度版本则传入:(address_version&#x3D;&#39;2022Q2&#39;)，想要获取最新版本则传入:(address_version &#x3D;&#39;UPTODATE&#39;) | [optional]
 **needRecommend** | **string**| 门店不置信时，是否需要返回shop_recommend_info | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandShopQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
