# Alipay\OpenAPISDK\AlipayMarketingCardApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete()**](AlipayMarketingCardApi.md#delete) | **DELETE** /v3/alipay/marketing/card/delete | 会员卡删卡
[**open()**](AlipayMarketingCardApi.md#open) | **POST** /v3/alipay/marketing/card/open | 会员卡开卡
[**query()**](AlipayMarketingCardApi.md#query) | **POST** /v3/alipay/marketing/card/query | 会员卡查询
[**update()**](AlipayMarketingCardApi.md#update) | **POST** /v3/alipay/marketing/card/update | 会员卡更新


## `delete()`

```php
delete($outSerialNo, $targetCardNo, $targetCardNoType, $reasonCode, $extInfo): \Alipay\OpenAPISDK\Model\AlipayMarketingCardDeleteResponseModel
```

会员卡删卡

通过 API 接口删除商家会员卡。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardApi(
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

$outSerialNo = 2016062700001; // string | 商户端删卡业务流水号，商户自定义且需确保流水号唯一性。
$targetCardNo = 0000001; // string | 支付宝业务卡号。即开卡接口返回结果中的card_info.biz_card_no。
$targetCardNoType = BIZ_CARD; // string | 卡号ID类型
$reasonCode = USER_UNBUND; // string | 删卡原因  USER_UNBUND：用户解绑（可以重新绑定）  CANCEL：销户（完成销户后，就不能再重新绑定）  PRESENT：转赠（可以重新绑定）
$extInfo = {"new_card_no":"12345"," donee_user_id":"2088102130652460"}; // string | 删卡扩展参数，json格式。  用于商户的特定业务信息的传递，只有商户与支付宝约定了传递此参数且约定了参数含义，此参数才有效。  目前支持如下key：  new_card_no：新卡号  donee_user_id：受赠人userId

try {
    $result = $apiInstance->delete($outSerialNo, $targetCardNo, $targetCardNoType, $reasonCode, $extInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outSerialNo** | **string**| 商户端删卡业务流水号，商户自定义且需确保流水号唯一性。 | [optional]
 **targetCardNo** | **string**| 支付宝业务卡号。即开卡接口返回结果中的card_info.biz_card_no。 | [optional]
 **targetCardNoType** | **string**| 卡号ID类型 | [optional]
 **reasonCode** | **string**| 删卡原因  USER_UNBUND：用户解绑（可以重新绑定）  CANCEL：销户（完成销户后，就不能再重新绑定）  PRESENT：转赠（可以重新绑定） | [optional]
 **extInfo** | **string**| 删卡扩展参数，json格式。  用于商户的特定业务信息的传递，只有商户与支付宝约定了传递此参数且约定了参数含义，此参数才有效。  目前支持如下key：  new_card_no：新卡号  donee_user_id：受赠人userId | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `open()`

```php
open($authToken, $alipayMarketingCardOpenModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardOpenResponseModel
```

会员卡开卡

商户通过API接口，进行会员卡开卡。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardApi(
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

$authToken = 'authToken_example'; // string | 用户授权令牌
$alipayMarketingCardOpenModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardOpenModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardOpenModel

try {
    $result = $apiInstance->open($authToken, $alipayMarketingCardOpenModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardApi->open: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authToken** | **string**| 用户授权令牌 | [optional]
 **alipayMarketingCardOpenModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardOpenModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardOpenResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($alipayMarketingCardQueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardQueryResponseModel
```

会员卡查询

根据卡号或者持卡人信息查询会员卡信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardApi(
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

$alipayMarketingCardQueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardQueryModel

try {
    $result = $apiInstance->query($alipayMarketingCardQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `update()`

```php
update($alipayMarketingCardUpdateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardUpdateResponseModel
```

会员卡更新

会员卡更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardApi(
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

$alipayMarketingCardUpdateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardUpdateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardUpdateModel

try {
    $result = $apiInstance->update($alipayMarketingCardUpdateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardUpdateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardUpdateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardUpdateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
