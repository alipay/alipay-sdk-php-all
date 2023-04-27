# Alipay\OpenAPISDK\AlipayMarketingRecruitEnrollApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**close()**](AlipayMarketingRecruitEnrollApi.md#close) | **POST** /v3/alipay/marketing/recruit/enroll/close | 下线报名
[**create()**](AlipayMarketingRecruitEnrollApi.md#create) | **POST** /v3/alipay/marketing/recruit/enroll/create | 招商报名提交
[**query()**](AlipayMarketingRecruitEnrollApi.md#query) | **GET** /v3/alipay/marketing/recruit/enroll/query | 报名详情查询


## `close()`

```php
close($alipayMarketingRecruitEnrollCloseModel): object
```

下线报名

下线报名

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingRecruitEnrollApi(
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

$alipayMarketingRecruitEnrollCloseModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCloseModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCloseModel

try {
    $result = $apiInstance->close($alipayMarketingRecruitEnrollCloseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingRecruitEnrollApi->close: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingRecruitEnrollCloseModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCloseModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayMarketingRecruitEnrollCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCreateResponseModel
```

招商报名提交

创建报名后立即提交，审核通过后会以消息的形式通知调用方（需要接入消息接口alipay.marketing.enroll.status.changed）。在消息通知前可以尝试调用“报名详情查询接口（alipay.marketing.enroll.detail.query）”了解报名状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingRecruitEnrollApi(
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

$alipayMarketingRecruitEnrollCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCreateModel

try {
    $result = $apiInstance->create($alipayMarketingRecruitEnrollCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingRecruitEnrollApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingRecruitEnrollCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($outBizNo, $enrollId): \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollQueryResponseModel
```

报名详情查询

报名详情查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingRecruitEnrollApi(
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

$outBizNo = 21ba1e1c16456985463242192e4d; // string | 外部操作流水号。由商家/ISV 自定义，仅支持字母、数字、下划线且需保证每次操作唯一。
$enrollId = 2021041301000200000000000000; // string | 报名ID，此参数和out_biz_no至少传一个，优先取enroll_id

try {
    $result = $apiInstance->query($outBizNo, $enrollId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingRecruitEnrollApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outBizNo** | **string**| 外部操作流水号。由商家/ISV 自定义，仅支持字母、数字、下划线且需保证每次操作唯一。 | [optional]
 **enrollId** | **string**| 报名ID，此参数和out_biz_no至少传一个，优先取enroll_id | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitEnrollQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
