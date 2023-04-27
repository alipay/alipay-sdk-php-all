# Alipay\OpenAPISDK\AlipayOpenSpBlueseaactivityApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenSpBlueseaactivityApi.md#create) | **POST** /v3/alipay/open/sp/blueseaactivity/create | 服务商返佣活动报名申请
[**modify()**](AlipayOpenSpBlueseaactivityApi.md#modify) | **POST** /v3/alipay/open/sp/blueseaactivity/modify | 服务商返佣活动申请单修改
[**query()**](AlipayOpenSpBlueseaactivityApi.md#query) | **GET** /v3/alipay/open/sp/blueseaactivity/query | 服务商返佣活动申请单详情查询


## `create()`

```php
create($alipayOpenSpBlueseaactivityCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityCreateResponseModel
```

服务商返佣活动报名申请

服务商返佣活动报名

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpBlueseaactivityApi(
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

$alipayOpenSpBlueseaactivityCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityCreateModel

try {
    $result = $apiInstance->create($alipayOpenSpBlueseaactivityCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpBlueseaactivityApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpBlueseaactivityCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayOpenSpBlueseaactivityModifyModel): object
```

服务商返佣活动申请单修改

服务商返佣活动

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpBlueseaactivityApi(
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

$alipayOpenSpBlueseaactivityModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityModifyModel

try {
    $result = $apiInstance->modify($alipayOpenSpBlueseaactivityModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpBlueseaactivityApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenSpBlueseaactivityModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityModifyModel**|  | [optional]

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
query($orderId): \Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityQueryResponseModel
```

服务商返佣活动申请单详情查询

服务商返佣活动

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpBlueseaactivityApi(
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

$orderId = 5881; // string | 申请单 id。通过 <a href=\"https://opendocs.alipay.com/apis/01ebig\">alipay.open.sp.blueseaactivity.create</a>接口获取

try {
    $result = $apiInstance->query($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpBlueseaactivityApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| 申请单 id。通过 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/01ebig\&quot;&gt;alipay.open.sp.blueseaactivity.create&lt;/a&gt;接口获取 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpBlueseaactivityQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
