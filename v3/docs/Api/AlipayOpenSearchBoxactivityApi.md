# Alipay\OpenAPISDK\AlipayOpenSearchBoxactivityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenSearchBoxactivityApi.md#apply) | **POST** /v3/alipay/open/search/boxactivity/apply | 申请创建搜索直达活动配置
[**query()**](AlipayOpenSearchBoxactivityApi.md#query) | **GET** /v3/alipay/open/search/boxactivity/query | 查询搜索直达活动配置详情


## `apply()`

```php
apply($alipayOpenSearchBoxactivityApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityApplyResponseModel
```

申请创建搜索直达活动配置

当搜索直达处于上架状态时，通过该接口来创建banner活动。相关概念和说明详见 <a href=\"https://opendocs.alipay.com/mini/03fjba\"> 搜索直达 </a>。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxactivityApi(
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

$alipayOpenSearchBoxactivityApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityApplyModel

try {
    $result = $apiInstance->apply($alipayOpenSearchBoxactivityApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxactivityApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSearchBoxactivityApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($boxActivityId, $merchantId): \Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityQueryResponseModel
```

查询搜索直达活动配置详情

查询单个搜索直达banner的活动信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSearchBoxactivityApi(
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

$boxActivityId = 20211223000000100000; // string | 搜索直达活动id
$merchantId = 2088xxxxxxxxxxxx; // string | 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\"运营支付宝小程序\"授权。

try {
    $result = $apiInstance->query($boxActivityId, $merchantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSearchBoxactivityApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **boxActivityId** | **string**| 搜索直达活动id | [optional]
 **merchantId** | **string**| 商户id，代运营模式下传入。代运营模式，需要服务商已获得商家\&quot;运营支付宝小程序\&quot;授权。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSearchBoxactivityQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
