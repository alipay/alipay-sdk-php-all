# Alipay\OpenAPISDK\AlipayOpenMiniTemplatemsgMaketingstatusApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenMiniTemplatemsgMaketingstatusApi.md#modify) | **POST** /v3/alipay/open/mini/templatemsg/maketingstatus/modify | 小程序模板消息营销投放详情状态修改


## `modify()`

```php
modify($alipayOpenMiniTemplatemsgMaketingstatusModifyModel): object
```

小程序模板消息营销投放详情状态修改

小程序模板消息营销投放详情状态修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTemplatemsgMaketingstatusApi(
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

$alipayOpenMiniTemplatemsgMaketingstatusModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingstatusModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingstatusModifyModel

try {
    $result = $apiInstance->modify($alipayOpenMiniTemplatemsgMaketingstatusModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTemplatemsgMaketingstatusApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTemplatemsgMaketingstatusModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemsgMaketingstatusModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
