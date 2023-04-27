# Alipay\OpenAPISDK\AlipayOpenPublicInfoApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayOpenPublicInfoApi.md#modify) | **POST** /v3/alipay/open/public/info/modify | 生活号基础信息修改接口
[**query()**](AlipayOpenPublicInfoApi.md#query) | **GET** /v3/alipay/open/public/info/query | 生活号基础信息查询接口


## `modify()`

```php
modify($alipayOpenPublicInfoModifyModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoModifyResponseModel
```

生活号基础信息修改接口

提供生活号基础信息修改，同时适用于口碑商户签约当面付2.0默认创建的服务窗，需上传相关资质材料。修改名称、头像、简介会触发风控审核，审核通过后修改生效，支持isv调用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicInfoApi(
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

$alipayOpenPublicInfoModifyModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoModifyModel

try {
    $result = $apiInstance->modify($alipayOpenPublicInfoModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicInfoApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicInfoModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query(): \Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoQueryResponseModel
```

生活号基础信息查询接口

提供名称、头像、简介、欢迎语、上下架、审核信息查询，支持isv调用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicInfoApi(
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
    echo 'Exception when calling AlipayOpenPublicInfoApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicInfoQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
