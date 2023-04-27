# Alipay\OpenAPISDK\AlipayOpenMiniWidgetGoodsApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenMiniWidgetGoodsApi.md#modify) | **PATCH** /v3/alipay/open/mini/widget/goods/modify | 小部件商品修改
[**query()**](AlipayOpenMiniWidgetGoodsApi.md#query) | **GET** /v3/alipay/open/mini/widget/goods/query | 小部件商品查询
[**upload()**](AlipayOpenMiniWidgetGoodsApi.md#upload) | **POST** /v3/alipay/open/mini/widget/goods/upload | 小部件商品上传


## `modify()`

```php
modify($alipayOpenMiniWidgetGoodsModifyModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsModifyResponseModel
```

小部件商品修改

面向商品售卖类的小部件，提供的商品信息修改能力，修改后会进行文本和图片信息审核，审核完成后通知结果通过openmq消息通知

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniWidgetGoodsApi(
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

$alipayOpenMiniWidgetGoodsModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsModifyModel

try {
    $result = $apiInstance->modify($alipayOpenMiniWidgetGoodsModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniWidgetGoodsApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniWidgetGoodsModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($miniAppId, $pid, $goodsId, $pageNum, $pageSize): \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsQueryResponseModel
```

小部件商品查询

面向商品售卖类的小部件，提供商品信息查询能力，返回审核通过的商品信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniWidgetGoodsApi(
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

$miniAppId = 2017072607907880; // string | 根据承接品的商家小程序ID查询
$pid = 2088xxxxxxxxx; // string | 根据承接该品的小程序背后的商家查询
$goodsId = 8948968498; // string | 根据商品的唯一标识查询
$pageNum = 1; // int | 查询第几页，最小值为1
$pageSize = 10; // int | 查询页面数量，最大值为50

try {
    $result = $apiInstance->query($miniAppId, $pid, $goodsId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniWidgetGoodsApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 根据承接品的商家小程序ID查询 | [optional]
 **pid** | **string**| 根据承接该品的小程序背后的商家查询 | [optional]
 **goodsId** | **string**| 根据商品的唯一标识查询 | [optional]
 **pageNum** | **int**| 查询第几页，最小值为1 | [optional]
 **pageSize** | **int**| 查询页面数量，最大值为50 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `upload()`

```php
upload($alipayOpenMiniWidgetGoodsUploadModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsUploadResponseModel
```

小部件商品上传

面向商品售卖类的小部件，提供的商品信息上传能力，上传后会进行文本和图片信息审核，审核完成后通知结果通过openmq消息通知

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniWidgetGoodsApi(
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

$alipayOpenMiniWidgetGoodsUploadModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsUploadModel

try {
    $result = $apiInstance->upload($alipayOpenMiniWidgetGoodsUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniWidgetGoodsApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniWidgetGoodsUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsUploadModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniWidgetGoodsUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
