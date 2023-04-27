# Alipay\OpenAPISDK\AlipayOpenMiniTemplatemessageUsertemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenMiniTemplatemessageUsertemplateApi.md#apply) | **POST** /v3/alipay/open/mini/templatemessage/usertemplate/apply | 小程序模板消息申请


## `apply()`

```php
apply($alipayOpenMiniTemplatemessageUsertemplateApplyModel): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemessageUsertemplateApplyResponseModel
```

小程序模板消息申请

小程序模板消息申请，申请之后可以通过返回的user_template_id来发送模板消息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTemplatemessageUsertemplateApi(
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

$alipayOpenMiniTemplatemessageUsertemplateApplyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemessageUsertemplateApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemessageUsertemplateApplyModel

try {
    $result = $apiInstance->apply($alipayOpenMiniTemplatemessageUsertemplateApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTemplatemessageUsertemplateApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniTemplatemessageUsertemplateApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemessageUsertemplateApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTemplatemessageUsertemplateApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
