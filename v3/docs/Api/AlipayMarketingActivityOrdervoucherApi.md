# Alipay\OpenAPISDK\AlipayMarketingActivityOrdervoucherApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**append()**](AlipayMarketingActivityOrdervoucherApi.md#append) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/append | 修改商家券活动发券数量上限
[**associate()**](AlipayMarketingActivityOrdervoucherApi.md#associate) | **POST** /v3/alipay/marketing/activity/ordervoucher/associate | 关联订单信息
[**callUse()**](AlipayMarketingActivityOrdervoucherApi.md#callUse) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/{voucher_code}/use | 同步券核销状态
[**codecount()**](AlipayMarketingActivityOrdervoucherApi.md#codecount) | **GET** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/codecount | 统计商家券券码数量
[**codedeposit()**](AlipayMarketingActivityOrdervoucherApi.md#codedeposit) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/codedeposit | 同步商家券券码
[**create()**](AlipayMarketingActivityOrdervoucherApi.md#create) | **POST** /v3/alipay/marketing/ordervoucher/activity | 创建商家券活动
[**disassociate()**](AlipayMarketingActivityOrdervoucherApi.md#disassociate) | **POST** /v3/alipay/marketing/activity/ordervoucher/disassociate | 取消关联订单信息
[**modify()**](AlipayMarketingActivityOrdervoucherApi.md#modify) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id} | 修改商家券活动基本信息
[**query()**](AlipayMarketingActivityOrdervoucherApi.md#query) | **GET** /v3/alipay/marketing/activity/ordervoucher/query | 查询商家券活动
[**refund()**](AlipayMarketingActivityOrdervoucherApi.md#refund) | **POST** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/voucher/{voucher_code}/refund | 取消券核销状态
[**stop()**](AlipayMarketingActivityOrdervoucherApi.md#stop) | **PATCH** /v3/alipay/marketing/ordervoucher/activity/{activity_id}/stop | 停止商家券活动


## `append()`

```php
append($activityId, $alipayMarketingActivityOrdervoucherAppendModel): object
```

修改商家券活动发券数量上限

商家调用该接口修改商家券活动预算上限，以此来追加商家券活动预算。 修改商家券活动预算上限同步返回追加请求受理结果，后续通过alipay.marketing.activity.message.appended消息接口异步发送发券数量上限修改成功事件消息。 code_mode=MERCHANT_UPLOAD场景下，必须先导入券码后，方可追加商家券预算。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$alipayMarketingActivityOrdervoucherAppendModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAppendModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAppendModel

try {
    $result = $apiInstance->append($activityId, $alipayMarketingActivityOrdervoucherAppendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->append: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **alipayMarketingActivityOrdervoucherAppendModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAppendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `associate()`

```php
associate($alipayMarketingActivityOrdervoucherAssociateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAssociateResponseModel
```

关联订单信息

将已发放的商家券券码与订单信息关联，用于后续参与返佣激励等操作的统计。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$alipayMarketingActivityOrdervoucherAssociateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAssociateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAssociateModel

try {
    $result = $apiInstance->associate($alipayMarketingActivityOrdervoucherAssociateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->associate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityOrdervoucherAssociateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAssociateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherAssociateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `callUse()`

```php
callUse($activityId, $voucherCode, $alipayMarketingActivityOrdervoucherUseModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherUseResponseModel
```

同步券核销状态

商户调用该接口，通过券码进行优惠券核销，接口同步返回核销结果。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$voucherCode = ABE44; // string | 待核销的券码。
$alipayMarketingActivityOrdervoucherUseModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherUseModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherUseModel

try {
    $result = $apiInstance->callUse($activityId, $voucherCode, $alipayMarketingActivityOrdervoucherUseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->callUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **voucherCode** | **string**| 待核销的券码。 |
 **alipayMarketingActivityOrdervoucherUseModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherUseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherUseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `codecount()`

```php
codecount($activityId, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodecountResponseModel
```

统计商家券券码数量

商家调用该接口查询活动中的有效券码个数。接口同步返回查询结果。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式

try {
    $result = $apiInstance->codecount($activityId, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->codecount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **merchantAccessMode** | **string**| 商户接入模式 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodecountResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `codedeposit()`

```php
codedeposit($activityId, $alipayMarketingActivityOrdervoucherCodedepositModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodedepositResponseModel
```

同步商家券券码

商家调用该接口同步导入商家券券码，接口同步返回导入结果。请在接收alipay.marketing.activity.message.created消息后，再进行调用。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$alipayMarketingActivityOrdervoucherCodedepositModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodedepositModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodedepositModel

try {
    $result = $apiInstance->codedeposit($activityId, $alipayMarketingActivityOrdervoucherCodedepositModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->codedeposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **alipayMarketingActivityOrdervoucherCodedepositModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodedepositModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCodedepositResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayMarketingActivityOrdervoucherCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCreateResponseModel
```

创建商家券活动

商家调用该接口创建商家券活动。 创建商家券活动接口同步返回创建请求受理结果，后续通过alipay.marketing.activity.message.created消息接口异步发送活动创建成功事件消息。  如果在code_mode=MERCHANT_UPLOAD的模式下，创建商家券活动后，还需要进行券码导入操作，以及预算追加操作，然后商家券才能进行发放。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$alipayMarketingActivityOrdervoucherCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCreateModel

try {
    $result = $apiInstance->create($alipayMarketingActivityOrdervoucherCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityOrdervoucherCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `disassociate()`

```php
disassociate($alipayMarketingActivityOrdervoucherDisassociateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherDisassociateResponseModel
```

取消关联订单信息

取消商家券与订单信息的关联关系.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$alipayMarketingActivityOrdervoucherDisassociateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherDisassociateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherDisassociateModel

try {
    $result = $apiInstance->disassociate($alipayMarketingActivityOrdervoucherDisassociateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->disassociate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityOrdervoucherDisassociateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherDisassociateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherDisassociateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($activityId, $alipayMarketingActivityOrdervoucherModifyModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherModifyResponseModel
```

修改商家券活动基本信息

商家调用该接口修改商家券活动基本信息。 修改商家券活动基本信息接口同步返回修改请求受理结果，后续通过alipay.marketing.activity.message.modified消息接口异步发送修改活动成功事件消息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id1
$alipayMarketingActivityOrdervoucherModifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherModifyModel

try {
    $result = $apiInstance->modify($activityId, $alipayMarketingActivityOrdervoucherModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id1 |
 **alipayMarketingActivityOrdervoucherModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($activityId, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherQueryResponseModel
```

查询商家券活动

商户通过该接口查询商家券活动详情。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式

try {
    $result = $apiInstance->query($activityId, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id | [optional]
 **merchantAccessMode** | **string**| 商户接入模式 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($activityId, $voucherCode, $alipayMarketingActivityOrdervoucherRefundModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherRefundResponseModel
```

取消券核销状态

商户调用该接口进行优惠券退券处理。接口同步返回结果。 如果优惠券过期后，发起退券操作，该接口返回成功，优惠券退回后仍不可用。 如果优惠券在支付宝卡包已删除，发起退券操作，该接口返回成功，优惠券在支付宝卡包仍然是删除状态。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$voucherCode = ABE44; // string | 已核销待退券的券码
$alipayMarketingActivityOrdervoucherRefundModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherRefundModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherRefundModel

try {
    $result = $apiInstance->refund($activityId, $voucherCode, $alipayMarketingActivityOrdervoucherRefundModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **voucherCode** | **string**| 已核销待退券的券码 |
 **alipayMarketingActivityOrdervoucherRefundModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherRefundModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherRefundResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `stop()`

```php
stop($activityId, $alipayMarketingActivityOrdervoucherStopModel): object
```

停止商家券活动

商家调用该接口停止优惠券。 停止优惠券接口同步返回停止请求受理结果，后续通过alipay.marketing.activity.message.stopped消息接口异步发送停止活动成功事件。 如果成功消息长时间未送达，请联系相关技术人员。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityOrdervoucherApi(
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

$activityId = 2016042700826004508401111111; // string | 活动id
$alipayMarketingActivityOrdervoucherStopModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherStopModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherStopModel

try {
    $result = $apiInstance->stop($activityId, $alipayMarketingActivityOrdervoucherStopModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityOrdervoucherApi->stop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id |
 **alipayMarketingActivityOrdervoucherStopModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityOrdervoucherStopModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
