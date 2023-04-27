# Alipay\OpenAPISDK\AntMerchantExpandItemApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AntMerchantExpandItemApi.md#create) | **POST** /v3/ant/merchant/expand/item/create | 商品创建接口
[**delete()**](AntMerchantExpandItemApi.md#delete) | **DELETE** /v3/ant/merchant/expand/item/delete | 商品删除接口
[**modify()**](AntMerchantExpandItemApi.md#modify) | **POST** /v3/ant/merchant/expand/item/modify | 商品修改接口
[**query()**](AntMerchantExpandItemApi.md#query) | **GET** /v3/ant/merchant/expand/item/query | 商品查询接口


## `create()`

```php
create($antMerchantExpandItemCreateModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemCreateResponseModel
```

商品创建接口

用于服务商或商户创建商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemApi(
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

$antMerchantExpandItemCreateModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemCreateModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemCreateModel

try {
    $result = $apiInstance->create($antMerchantExpandItemCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemCreateModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($itemId, $externalItemId): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemDeleteResponseModel
```

商品删除接口

用于服务商或商户删除商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemApi(
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

$itemId = 2018091300502200002600104169; // string | 商品ID（item_id不为空则以item_id作为删除KEY,item_id为空则以external_item_id作为删除KEY,两者不能同时为空）
$externalItemId = 20190916123124123123123; // string | 外部商品ID（item_id不为空则以item_id作为删除KEY,item_id为空则以external_item_id作为删除KEY,两者不能同时为空）

try {
    $result = $apiInstance->delete($itemId, $externalItemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **string**| 商品ID（item_id不为空则以item_id作为删除KEY,item_id为空则以external_item_id作为删除KEY,两者不能同时为空） | [optional]
 **externalItemId** | **string**| 外部商品ID（item_id不为空则以item_id作为删除KEY,item_id为空则以external_item_id作为删除KEY,两者不能同时为空） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($antMerchantExpandItemModifyModel): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemModifyResponseModel
```

商品修改接口

用于服务商或商户修改商品

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemApi(
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

$antMerchantExpandItemModifyModel = new \Alipay\OpenAPISDK\Model\AntMerchantExpandItemModifyModel(); // \Alipay\OpenAPISDK\Model\AntMerchantExpandItemModifyModel

try {
    $result = $apiInstance->modify($antMerchantExpandItemModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **antMerchantExpandItemModifyModel** | **\Alipay\OpenAPISDK\Model\AntMerchantExpandItemModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($targetType, $targetId, $undefinedCategory, $frontCategoryId, $status): \Alipay\OpenAPISDK\Model\AntMerchantExpandItemQueryResponseModel
```

商品查询接口

用于服务商或商户查询其商品信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandItemApi(
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

$targetType = 5; // string | 商品归属主体类型:  5: 店铺  4: 主站MID  3: 参与者  2: 角色  1: 联系人
$targetId = 2018090600502000000022501261; // string | 商品归属主体id
$undefinedCategory = false; // bool | 未分类类目: true 的时候 front_category_id 必须不填（null）
$frontCategoryId = 2018091300502200002600105884; // string | 商品前台类目id: null 表示所有分类
$status = EFFECT; // string | 商品状态：EFFECT、INVALID、PAUSE；不填返回所有状态商品

try {
    $result = $apiInstance->query($targetType, $targetId, $undefinedCategory, $frontCategoryId, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandItemApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetType** | **string**| 商品归属主体类型:  5: 店铺  4: 主站MID  3: 参与者  2: 角色  1: 联系人 | [optional]
 **targetId** | **string**| 商品归属主体id | [optional]
 **undefinedCategory** | **bool**| 未分类类目: true 的时候 front_category_id 必须不填（null） | [optional]
 **frontCategoryId** | **string**| 商品前台类目id: null 表示所有分类 | [optional]
 **status** | **string**| 商品状态：EFFECT、INVALID、PAUSE；不填返回所有状态商品 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandItemQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
