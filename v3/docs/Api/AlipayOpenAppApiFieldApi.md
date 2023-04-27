# Alipay\OpenAPISDK\AlipayOpenAppApiFieldApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenAppApiFieldApi.md#apply) | **POST** /v3/alipay/open/app/api/field/apply | 申请获取接口用户敏感信息字段
[**query()**](AlipayOpenAppApiFieldApi.md#query) | **GET** /v3/alipay/open/app/api/field/query | 用户信息申请记录查询


## `apply()`

```php
apply($data, $picture1, $picture2, $picture3, $picture4, $picture5, $video): object
```

申请获取接口用户敏感信息字段

申请获取接口出参中用户敏感信息字段，应用使用视频或图片（至少选择一项上传），单个图片或视频不超过10M，最多可上传5张图片示例。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppApiFieldApi(
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

$data = new \Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel
$picture1 = "/path/to/file.txt"; // \SplFileObject
$picture2 = "/path/to/file.txt"; // \SplFileObject
$picture3 = "/path/to/file.txt"; // \SplFileObject
$picture4 = "/path/to/file.txt"; // \SplFileObject
$picture5 = "/path/to/file.txt"; // \SplFileObject
$video = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apply($data, $picture1, $picture2, $picture3, $picture4, $picture5, $video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppApiFieldApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel**|  | [optional]
 **picture1** | **\SplFileObject****\SplFileObject**|  | [optional]
 **picture2** | **\SplFileObject****\SplFileObject**|  | [optional]
 **picture3** | **\SplFileObject****\SplFileObject**|  | [optional]
 **picture4** | **\SplFileObject****\SplFileObject**|  | [optional]
 **picture5** | **\SplFileObject****\SplFileObject**|  | [optional]
 **video** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query(): \Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldQueryResponseModel
```

用户信息申请记录查询

查询用户信息申请记录，开发者发起请求时会基于当前发起请求的app_id进行查询，若为isv发起的三方代调用则以授权的商户app_id进行查询。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAppApiFieldApi(
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


try {
    $result = $apiInstance->query();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAppApiFieldApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
