# Alipay\OpenAPISDK\AlipayOpenMiniInnerappServiceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**publish()**](AlipayOpenMiniInnerappServiceApi.md#publish) | **POST** /v3/alipay/open/mini/innerapp/service/publish | 小程序模板发布服务市场
[**query()**](AlipayOpenMiniInnerappServiceApi.md#query) | **GET** /v3/alipay/open/mini/innerapp/service/query | 小程序服务市场搜索


## `publish()`

```php
publish($alipayOpenMiniInnerappServicePublishModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServicePublishResponseModel
```

小程序模板发布服务市场

小程序提供一套针对一二方场景的开发者提供一套统一的内部能力开放体系，定向输出赋能

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappServiceApi(
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

$alipayOpenMiniInnerappServicePublishModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServicePublishModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServicePublishModel

try {
    $result = $apiInstance->publish($alipayOpenMiniInnerappServicePublishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappServiceApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniInnerappServicePublishModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServicePublishModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServicePublishResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($miniAppId, $appSubType, $showType, $keyword, $pageNum, $pageSize, $appOrigin, $includeOffline): \Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServiceQueryResponseModel
```

小程序服务市场搜索

小程序服务市场搜索，包括搜索模板和插件

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniInnerappServiceApi(
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

$miniAppId = 2012211102012056; // string | 插件id或模板id
$appSubType = TINYAPP_TEMPLATE、TINYAPP_PLUGIN; // string | 小程序应用子类型
$showType = SHOW; // string | 是否在服务市场透出，SHOW展示、HIDE隐藏
$keyword = xxxx插件; // string | 关键词
$pageNum = 1; // string | 页码，默认第一页
$pageSize = 10; // string | 分页数，默认每页10个
$appOrigin = https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang; // string | 业务来源，新接入方需要向支付宝申请专用来源，否则不予接入。https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang
$includeOffline = true; // bool | 是否需要展示offline状态插件，不传默认为false（不展示）

try {
    $result = $apiInstance->query($miniAppId, $appSubType, $showType, $keyword, $pageNum, $pageSize, $appOrigin, $includeOffline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniInnerappServiceApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **miniAppId** | **string**| 插件id或模板id | [optional]
 **appSubType** | **string**| 小程序应用子类型 | [optional]
 **showType** | **string**| 是否在服务市场透出，SHOW展示、HIDE隐藏 | [optional]
 **keyword** | **string**| 关键词 | [optional]
 **pageNum** | **string**| 页码，默认第一页 | [optional]
 **pageSize** | **string**| 分页数，默认每页10个 | [optional]
 **appOrigin** | **string**| 业务来源，新接入方需要向支付宝申请专用来源，否则不予接入。https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang | [optional]
 **includeOffline** | **bool**| 是否需要展示offline状态插件，不传默认为false（不展示） | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniInnerappServiceQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
