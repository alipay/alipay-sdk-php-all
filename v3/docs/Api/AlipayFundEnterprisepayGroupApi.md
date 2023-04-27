# Alipay\OpenAPISDK\AlipayFundEnterprisepayGroupApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayFundEnterprisepayGroupApi.md#add) | **POST** /v3/alipay/fund/enterprisepay/group/add | 因公付新增账户下群组
[**delete()**](AlipayFundEnterprisepayGroupApi.md#delete) | **DELETE** /v3/alipay/fund/enterprisepay/group/delete | 因公付删除账户下群组
[**modify()**](AlipayFundEnterprisepayGroupApi.md#modify) | **POST** /v3/alipay/fund/enterprisepay/group/modify | 因公付更新账户下群组
[**query()**](AlipayFundEnterprisepayGroupApi.md#query) | **GET** /v3/alipay/fund/enterprisepay/group/query | 因公付查询账户下群组


## `add()`

```php
add($alipayFundEnterprisepayGroupAddModel): \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupAddResponseModel
```

因公付新增账户下群组

创建因公付群组，包含群组信息和出资信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayGroupApi(
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

$alipayFundEnterprisepayGroupAddModel = new \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupAddModel(); // \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupAddModel

try {
    $result = $apiInstance->add($alipayFundEnterprisepayGroupAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayGroupApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundEnterprisepayGroupAddModel** | **\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($productCode, $bizScene, $accountId, $agreementNo, $outBizNo): object
```

因公付删除账户下群组

因公付删除账户下群组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayGroupApi(
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

$productCode = ENTERPRISE_PAY; // string | 产品码，默认值 ENTERPRISE_PAY
$bizScene = ANT_GROUP; // string | 场景码，联系支付宝分配
$accountId = 2088888888; // string | 企业签约账户ID
$agreementNo = 1231231321323; // string | 平台和企业的三方授权协议号
$outBizNo = 12123123; // string | 外部业务号

try {
    $result = $apiInstance->delete($productCode, $bizScene, $accountId, $agreementNo, $outBizNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayGroupApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码，默认值 ENTERPRISE_PAY | [optional]
 **bizScene** | **string**| 场景码，联系支付宝分配 | [optional]
 **accountId** | **string**| 企业签约账户ID | [optional]
 **agreementNo** | **string**| 平台和企业的三方授权协议号 | [optional]
 **outBizNo** | **string**| 外部业务号 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayFundEnterprisepayGroupModifyModel): object
```

因公付更新账户下群组

因公付更新账户下群组

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayGroupApi(
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

$alipayFundEnterprisepayGroupModifyModel = new \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupModifyModel

try {
    $result = $apiInstance->modify($alipayFundEnterprisepayGroupModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayGroupApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundEnterprisepayGroupModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($productCode, $bizScene, $accountId, $agreementNo, $outBizNo): \Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupQueryResponseModel
```

因公付查询账户下群组

查询因公付群组，包含群组信息和对应的出资主体

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundEnterprisepayGroupApi(
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

$productCode = ENTERPRISE_PAY; // string | 产品码，默认值 ENTERPRISE_PAY
$bizScene = ANT_GROUP; // string | 场景码，联系支付宝分配
$accountId = 2088888888; // string | 企业签约账户ID
$agreementNo = 1231231321323; // string | 平台和企业的三方授权协议号
$outBizNo = 12312313; // string | 外部业务号，外部群组号

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountId, $agreementNo, $outBizNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundEnterprisepayGroupApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码，默认值 ENTERPRISE_PAY | [optional]
 **bizScene** | **string**| 场景码，联系支付宝分配 | [optional]
 **accountId** | **string**| 企业签约账户ID | [optional]
 **agreementNo** | **string**| 平台和企业的三方授权协议号 | [optional]
 **outBizNo** | **string**| 外部业务号，外部群组号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundEnterprisepayGroupQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
