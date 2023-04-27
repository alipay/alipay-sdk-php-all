# Alipay\OpenAPISDK\AlipayIserviceCcmIsvApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**initialize()**](AlipayIserviceCcmIsvApi.md#initialize) | **POST** /v3/alipay/iservice/ccm/isv/initialize | ccm isv注册接口


## `initialize()`

```php
initialize($alipayIserviceCcmIsvInitializeModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmIsvInitializeResponseModel
```

ccm isv注册接口

商家 / ISV 开发的插件接入CCM（蚂蚁客户沟通管理平台）之前，需要先将自己的信息注册到 CCM，并设置一个用于 iframe 接口接入安全认证使用的公钥。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmIsvApi(
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

$alipayIserviceCcmIsvInitializeModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmIsvInitializeModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmIsvInitializeModel

try {
    $result = $apiInstance->initialize($alipayIserviceCcmIsvInitializeModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmIsvApi->initialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmIsvInitializeModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmIsvInitializeModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmIsvInitializeResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
