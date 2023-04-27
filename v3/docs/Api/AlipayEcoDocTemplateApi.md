# Alipay\OpenAPISDK\AlipayEcoDocTemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEcoDocTemplateApi.md#create) | **POST** /v3/alipay/eco/doc/template/create | 创建合同模板（E签宝）


## `create()`

```php
create($targetAppId, $alipayEcoDocTemplateCreateModel): \Alipay\OpenAPISDK\Model\AlipayEcoDocTemplateCreateResponseModel
```

创建合同模板（E签宝）

通过此接口创建合同模板后，通过返回的文件直传地址上传模板文件（WORD/PDF）。同时记录接口返回的模板ID（templateId），后续发起合同签署需要使用到。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoDocTemplateApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$alipayEcoDocTemplateCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEcoDocTemplateCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoDocTemplateCreateModel

try {
    $result = $apiInstance->create($targetAppId, $alipayEcoDocTemplateCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoDocTemplateApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **alipayEcoDocTemplateCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoDocTemplateCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoDocTemplateCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
