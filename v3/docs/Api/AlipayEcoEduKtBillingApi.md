# Alipay\OpenAPISDK\AlipayEcoEduKtBillingApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayEcoEduKtBillingApi.md#modify) | **POST** /v3/alipay/eco/edu/kt/billing/modify | 教育缴费账单状态同步接口
[**query()**](AlipayEcoEduKtBillingApi.md#query) | **GET** /v3/alipay/eco/edu/kt/billing/query | 缴费账单查询
[**send()**](AlipayEcoEduKtBillingApi.md#send) | **POST** /v3/alipay/eco/edu/kt/billing/send | 教育缴费账单发送接口


## `modify()`

```php
modify($alipayEcoEduKtBillingModifyModel): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingModifyResponseModel
```

教育缴费账单状态同步接口

isv向支付宝－中小学－教育缴费发送教育缴费账单后，家长在支付宝－中小学－教育缴费中对账单完成支付操作且支付成功，ISV在自有系统内容对账，完成后通过此接口同步对账后的账单状态。状态分为：缴费成功、缴费失败。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtBillingApi(
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

$alipayEcoEduKtBillingModifyModel = new \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingModifyModel

try {
    $result = $apiInstance->modify($alipayEcoEduKtBillingModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtBillingApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoEduKtBillingModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($isvPid, $schoolPid, $outTradeNo): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingQueryResponseModel
```

缴费账单查询

缴费账单查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtBillingApi(
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

$isvPid = 2088121212121212; // string | Isv pid
$schoolPid = 2088101117955611; // string | 学校支付宝pid，直付通填写smid
$outTradeNo = 58de07de7bb90a437553e464; // string | ISV调用发送账单接口，返回给商户的order_no

try {
    $result = $apiInstance->query($isvPid, $schoolPid, $outTradeNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtBillingApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isvPid** | **string**| Isv pid | [optional]
 **schoolPid** | **string**| 学校支付宝pid，直付通填写smid | [optional]
 **outTradeNo** | **string**| ISV调用发送账单接口，返回给商户的order_no | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `send()`

```php
send($alipayEcoEduKtBillingSendModel): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingSendResponseModel
```

教育缴费账单发送接口

商家发送教育缴费账单给孩子，家长在支付宝可以查看自己绑定的孩子的缴费账单。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtBillingApi(
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

$alipayEcoEduKtBillingSendModel = new \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingSendModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingSendModel

try {
    $result = $apiInstance->send($alipayEcoEduKtBillingSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtBillingApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoEduKtBillingSendModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingSendModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtBillingSendResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
