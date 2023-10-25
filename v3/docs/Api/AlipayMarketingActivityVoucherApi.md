# Alipay\OpenAPISDK\AlipayMarketingActivityVoucherApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**append()**](AlipayMarketingActivityVoucherApi.md#append) | **POST** /v3/alipay/marketing/activity/voucher/append | 追加支付券预算
[**create()**](AlipayMarketingActivityVoucherApi.md#create) | **POST** /v3/alipay/marketing/activity/voucher/create | 创建支付券
[**modify()**](AlipayMarketingActivityVoucherApi.md#modify) | **POST** /v3/alipay/marketing/activity/voucher/modify | 修改支付券基本信息
[**publish()**](AlipayMarketingActivityVoucherApi.md#publish) | **POST** /v3/alipay/marketing/activity/voucher/publish | 激活支付券
[**query()**](AlipayMarketingActivityVoucherApi.md#query) | **GET** /v3/alipay/marketing/activity/voucher/query | 查询支付券详情
[**send()**](AlipayMarketingActivityVoucherApi.md#send) | **POST** /v3/alipay/marketing/activity/voucher/send | 发放支付券
[**stop()**](AlipayMarketingActivityVoucherApi.md#stop) | **POST** /v3/alipay/marketing/activity/voucher/stop | 停止支付券


## `append()`

```php
append($alipayMarketingActivityVoucherAppendModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherAppendResponseModel
```

追加支付券预算

支付券激活成功后，调用该接口追加支付券预算。追加支付券预算接口同步返回请求受理结果，后续通过alipay.marketing.activity.message.appended消息接口异步发送追加支付券预算成功事件消息。  如果成功消息长时间未送达，请联系相关技术人员。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherAppendModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherAppendModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherAppendModel

try {
    $result = $apiInstance->append($alipayMarketingActivityVoucherAppendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->append: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherAppendModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherAppendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherAppendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `create()`

```php
create($alipayMarketingActivityVoucherCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherCreateResponseModel
```

创建支付券

商户通过调用此接口创建支付券，包括预充值&免充值支付券，接口同步返回创建处理结果。创建完成后将获得活动id，可用于各个营销场景的活动投放。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherCreateModel

try {
    $result = $apiInstance->create($alipayMarketingActivityVoucherCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayMarketingActivityVoucherModifyModel): object
```

修改支付券基本信息

商户可以通过该接口修改支付券基本信息。 接口同步返回修改请求受理结果，后续通过alipay.marketing.activity.message.modified消息接口异步发送修改活动成功事件消息。   特别注意：修改支付券接口返回结果并不代表活动修改成功，必须等待消息回调后才能确保成功。 如果成功消息长时间未送达，请联系相关技术人员。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherModifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherModifyModel

try {
    $result = $apiInstance->modify($alipayMarketingActivityVoucherModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherModifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `publish()`

```php
publish($alipayMarketingActivityVoucherPublishModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherPublishResponseModel
```

激活支付券

支付券创建成功后，通过调用此接口激活支付券。 激活支付券接口同步返回请求受理结果，后续通过alipay.marketing.activity.message.created消息接口异步发送激活支付券成功事件消息。 如果成功消息长时间未送达，请联系相关技术人员。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherPublishModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherPublishModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherPublishModel

try {
    $result = $apiInstance->publish($alipayMarketingActivityVoucherPublishModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->publish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherPublishModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherPublishModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherPublishResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($activityId, $merchantAccessMode): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherQueryResponseModel
```

查询支付券详情

通过此接口可查询支付券活动信息，包括活动的配置信息以及活动概况数据。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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
$merchantAccessMode = AGENCY_MODE; // string | 商户接入模式。

try {
    $result = $apiInstance->query($activityId, $merchantAccessMode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **string**| 活动id | [optional]
 **merchantAccessMode** | **string**| 商户接入模式。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `send()`

```php
send($alipayMarketingActivityVoucherSendModel): \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherSendResponseModel
```

发放支付券

API完成制券后，可使用发放支付券接口发券。通过调用此接口可发放支付券给指定用户，发券场景可以是小程序、H5、APP等。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherSendModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherSendModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherSendModel

try {
    $result = $apiInstance->send($alipayMarketingActivityVoucherSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherSendModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `stop()`

```php
stop($alipayMarketingActivityVoucherStopModel): object
```

停止支付券

商家调用该接口停止支付券。 停止支付券接口同步返回请求受理结果，后续通过alipay.marketing.activity.message.stopped消息接口异步发送停止活动成功事件。 如果成功消息长时间未送达，请联系相关技术人员。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingActivityVoucherApi(
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

$alipayMarketingActivityVoucherStopModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherStopModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherStopModel

try {
    $result = $apiInstance->stop($alipayMarketingActivityVoucherStopModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingActivityVoucherApi->stop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingActivityVoucherStopModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingActivityVoucherStopModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
