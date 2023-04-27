# Alipay\OpenAPISDK\AlipayDataDataserviceAdConversionApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayDataDataserviceAdConversionApi.md#upload) | **POST** /v3/alipay/data/dataservice/ad/conversion/upload | 转化数据回传


## `upload()`

```php
upload($alipayDataDataserviceAdConversionUploadModel): object
```

转化数据回传

用于回传转化数据

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataDataserviceAdConversionApi(
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

$alipayDataDataserviceAdConversionUploadModel = new \Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdConversionUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdConversionUploadModel

try {
    $result = $apiInstance->upload($alipayDataDataserviceAdConversionUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataDataserviceAdConversionApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayDataDataserviceAdConversionUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayDataDataserviceAdConversionUploadModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
