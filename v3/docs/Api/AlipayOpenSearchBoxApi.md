# Alipay\OpenAPISDK\AlipayOpenSearchBoxApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenSearchBoxApi.md#apply) | **POST** /v3/alipay/open/search/box/apply | 申请创建搜索直达配置
[**batchquery()**](AlipayOpenSearchBoxApi.md#batchquery) | **POST** /v3/alipay/open/search/box/batchquery | 批量查询搜索直达配置列表
[**consult()**](AlipayOpenSearchBoxApi.md#consult) | **POST** /v3/alipay/open/search/box/consult | 搜索直达创建预校验
[**modify()**](AlipayOpenSearchBoxApi.md#modify) | **POST** /v3/alipay/open/search/box/modify | 修改搜索直达配置
[**offline()**](AlipayOpenSearchBoxApi.md#offline) | **POST** /v3/alipay/open/search/box/offline | 下架搜索直达
[**online()**](AlipayOpenSearchBoxApi.md#online) | **POST** /v3/alipay/open/search/box/online | 上架搜索直达
[**query()**](AlipayOpenSearchBoxApi.md#query) | **GET** /v3/alipay/open/search/box/query | 查询搜索直达配置详情


## `apply()`

```php
apply($alipayOpenSearchBoxApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxApplyResponseModel
```

申请创建搜索直达配置

申请创建搜索直达配置，相关概念说明及准入条件详见 <a href=\"https://opendocs.alipay.com/mini/03fjba\"> 搜索直达 </a> 通过该接口创建搜索直达，满足准入门槛时，创建后立马生效。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxApplyModel

try {
    $result = $apiInstance->apply($alipayOpenSearchBoxApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `batchquery()`

```php
batchquery($alipayOpenSearchBoxBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxBatchqueryResponseModel
```

批量查询搜索直达配置列表

批量查询商户已开通搜索直达的小程序及直达信息（搜索直达名称和id）

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayOpenSearchBoxBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `consult()`

```php
consult($alipayOpenSearchBoxConsultModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxConsultResponseModel
```

搜索直达创建预校验

用于对搜索直达创建申请的入参和条件进行提前判断校验。 具体准入条件参考<a href=\"https://opendocs.alipay.com/pre-open/0311q3#%E5%87%86%E5%85%A5%E6%9D%A1%E4%BB%B6\">搜索直达准入条件</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxConsultModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxConsultModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxConsultModel

try {
    $result = $apiInstance->consult($alipayOpenSearchBoxConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxConsultModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOpenSearchBoxModifyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxModifyResponseModel
```

修改搜索直达配置

修改搜索直达配置模块，配置对应的模块参考：<a href=\"https://opendocs.alipay.com/mini/03fjba#%E4%BD%BF%E7%94%A8%E8%AF%B4%E6%98%8E\"> 搜索直达模块说明 </a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxModifyModel

try {
    $result = $apiInstance->modify($alipayOpenSearchBoxModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `offline()`

```php
offline($alipayOpenSearchBoxOfflineModel): object
```

下架搜索直达

若不需要运营搜索直达时，可调用次接口下架搜索直达

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxOfflineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOfflineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOfflineModel

try {
    $result = $apiInstance->offline($alipayOpenSearchBoxOfflineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->offline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxOfflineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOfflineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `online()`

```php
online($alipayOpenSearchBoxOnlineModel): object
```

上架搜索直达

若搜索直达处于下架状态时，可通过此接口来重新上架直达，上架须满足搜索直达准入门槛，若不满足，则会上架失败并报错

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$alipayOpenSearchBoxOnlineModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOnlineModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOnlineModel

try {
    $result = $apiInstance->online($alipayOpenSearchBoxOnlineModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->online: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxOnlineModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxOnlineModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($boxId, $merchantId): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxQueryResponseModel
```

查询搜索直达配置详情

查询商户已开通搜索直达的小程序及直达信息（搜索直达名称和id），各模块说明详见 <a href=\"https://opendocs.alipay.com/mini/03fjba\"> 搜索直达 </a>。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxApi(
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

$boxId = 20220308000000128693; // string | 搜索直达配置id
$merchantId = 2088xxxxxxxxxxxx; // string | 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\"运营支付宝小程序\"授权。

try {
    $result = $apiInstance->query($boxId, $merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **boxId** | **string**| 搜索直达配置id | [optional]
 **merchantId** | **string**| 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\&quot;运营支付宝小程序\&quot;授权。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
