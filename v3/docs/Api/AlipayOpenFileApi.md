# Alipay\OpenAPISDK\AlipayOpenFileApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayOpenFileApi.md#upload) | **POST** /v3/alipay/open/file/upload | 支付宝文件上传接口


## `upload()`

```php
upload($data, $fileContent): \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadResponseModel
```

支付宝文件上传接口

支付宝通用文件上传接口，支付宝开发者可以调用此接口上传文件，文件可以提供给其他业务使用，例如：上传素材（视频/图片），素材可以供给到生活号+/小程序等其他开放应用后正式发布。 该接口支持使用支付宝SDK和HTTP POST请求，两种方式示例如下： 1. 使用支付宝SDK时，可以直接使用FileItem上传，代码片段参考下文 2. 使用直接使用http协议时，需要忽略file_content参数，文件放入表单中，其余参数放入URL中，其中将参数（不包括文件和file_content）按<a href=\"https://opendocs.alipay.com/common/02kf5q#%E8%87%AA%E8%A1%8C%E5%AE%9E%E7%8E%B0%E7%AD%BE%E5%90%8D\">自行实现签名</a>文档实现，示例： curl --request POST 'http://openapi.alipay.com/gateway.do?charset=GBK&biz_content=%7B%22biz_code%22%3A%22content_creation%22%2C%22extra_parameters%22%3A%7B%22extern_upload%22%3A%22youku%22%2C%22alipay_user_id%22%3A%22xxxx%22%7D%7D&method=alipay.open.file.upload&format=json&sign=xxx&app_id=2014060600164699&version=1.0&sign_type=RSA2&timestamp=xxx'  --form 'file=@\"xx.mp4\"'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenFileApi(
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

$data = new \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel
$fileContent = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->upload($data, $fileContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenFileApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenFileUploadModel**|  | [optional]
 **fileContent** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenFileUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
