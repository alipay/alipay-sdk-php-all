# Alipay\OpenAPISDK\ZhimaMerchantZmgoCumulateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaMerchantZmgoCumulateApi.md#query) | **GET** /v3/zhima/merchant/zmgo/cumulate/query | 商家芝麻GO累计数据查询接口
[**sync()**](ZhimaMerchantZmgoCumulateApi.md#sync) | **POST** /v3/zhima/merchant/zmgo/cumulate/sync | 商家芝麻GO累计数据回传接口


## `query()`

```php
query($agreementId, $userId, $openId, $providerPid, $needDetail, $pageNo, $pageSize): \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateQueryResponseModel
```

商家芝麻GO累计数据查询接口

芝麻GO数据累计查询接口，包含汇总和明细信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantZmgoCumulateApi(
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

$agreementId = 20195108518085620000; // string | 芝麻go协议号，唯一标识一个芝麻go协议。
$userId = 2088602002015001; // string | 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$providerPid = 2088621805983504; // string | 数据回传的商户 ID，即和用户发生业务来往的 PID 主体。商户账号在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
$needDetail = false; // bool | 是否需要回传明细。枚举支持： * true：需要回传明细。 * false：不需要回传明细。
$pageNo = 1; // int | 分页参数，当need_detail=true时需要，代表当前页数，从1开始。
$pageSize = 20; // int | 分页参数，当need_detail=true时需要，代表每页大小，不能大于20。

try {
    $result = $apiInstance->query($agreementId, $userId, $openId, $providerPid, $needDetail, $pageNo, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantZmgoCumulateApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreementId** | **string**| 芝麻go协议号，唯一标识一个芝麻go协议。 | [optional]
 **userId** | **string**| 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **openId** | **string**| 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **providerPid** | **string**| 数据回传的商户 ID，即和用户发生业务来往的 PID 主体。商户账号在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。 | [optional]
 **needDetail** | **bool**| 是否需要回传明细。枚举支持： * true：需要回传明细。 * false：不需要回传明细。 | [optional]
 **pageNo** | **int**| 分页参数，当need_detail&#x3D;true时需要，代表当前页数，从1开始。 | [optional]
 **pageSize** | **int**| 分页参数，当need_detail&#x3D;true时需要，代表每页大小，不能大于20。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `sync()`

```php
sync($zhimaMerchantZmgoCumulateSyncModel): \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateSyncResponseModel
```

商家芝麻GO累计数据回传接口

外部商家接入芝麻GO场景下，回传用户行为履约数据给芝麻。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaMerchantZmgoCumulateApi(
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

$zhimaMerchantZmgoCumulateSyncModel = new \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateSyncModel(); // \Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateSyncModel

try {
    $result = $apiInstance->sync($zhimaMerchantZmgoCumulateSyncModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaMerchantZmgoCumulateApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zhimaMerchantZmgoCumulateSyncModel** | **\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateSyncModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaMerchantZmgoCumulateSyncResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
