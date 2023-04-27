# Alipay\OpenAPISDK\AlipayEbppPdeductSignApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**add()**](AlipayEbppPdeductSignApi.md#add) | **POST** /v3/alipay/ebpp/pdeduct/sign/add | 缴费直连代扣签约
[**cancel()**](AlipayEbppPdeductSignApi.md#cancel) | **POST** /v3/alipay/ebpp/pdeduct/sign/cancel | 缴费直连代扣取消签约
[**query()**](AlipayEbppPdeductSignApi.md#query) | **GET** /v3/alipay/ebpp/pdeduct/sign/query | 直连代扣协议查询接口
[**validate()**](AlipayEbppPdeductSignApi.md#validate) | **POST** /v3/alipay/ebpp/pdeduct/sign/validate | 缴费直连代扣签约前置校验


## `add()`

```php
add($alipayEbppPdeductSignAddModel): \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignAddResponseModel
```

缴费直连代扣签约

缴费直连代扣签约

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductSignApi(
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

$alipayEbppPdeductSignAddModel = new \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignAddModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignAddModel

try {
    $result = $apiInstance->add($alipayEbppPdeductSignAddModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductSignApi->add: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppPdeductSignAddModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignAddModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignAddResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `cancel()`

```php
cancel($alipayEbppPdeductSignCancelModel): \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignCancelResponseModel
```

缴费直连代扣取消签约

缴费直连代扣，用户取消签约接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductSignApi(
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

$alipayEbppPdeductSignCancelModel = new \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignCancelModel

try {
    $result = $apiInstance->cancel($alipayEbppPdeductSignCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductSignApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppPdeductSignCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignCancelModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignCancelResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($userId, $openId, $agreementId, $bizType, $subBizType, $chargeInst, $billKey): \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignQueryResponseModel
```

直连代扣协议查询接口

提供给朗新查询代扣协议状态的接口，用于进行双边对账，解决单边协议问题

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductSignApi(
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

$userId = 2088302186230962; // string | 用户ID
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 用户UserId在应用AppId下的唯一用户标识
$agreementId = 1234557890; // string | 支付宝代扣协议Id。若协议id不传递，则需要保证业务类型、子业务类型、出账机构、户号必传
$bizType = JF; // string | 业务类型。  JF：缴水、电、燃气、固话宽带、有线电视、交通罚款费用  WUYE：缴物业费  HK：信用卡还款  TX：手机充值
$subBizType = ELECTRIC; // string | 业务子类型。  WATER：缴水费  ELECTRIC：缴电费  GAS：缴燃气费  COMMUN：缴固话宽带  CATV：缴有线电视费  TRAFFIC：缴交通罚款  WUYE：缴物业费  HK：信用卡还款  CZ：手机充值
$chargeInst = CQCENTERELECTRIC; // string | 支付宝缴费系统中的出账机构ID
$billKey = 02659981; // string | 户号，机构针对于每户的水、电都会有唯一的标识户号

try {
    $result = $apiInstance->query($userId, $openId, $agreementId, $bizType, $subBizType, $chargeInst, $billKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductSignApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| 用户ID | [optional]
 **openId** | **string**| 用户UserId在应用AppId下的唯一用户标识 | [optional]
 **agreementId** | **string**| 支付宝代扣协议Id。若协议id不传递，则需要保证业务类型、子业务类型、出账机构、户号必传 | [optional]
 **bizType** | **string**| 业务类型。  JF：缴水、电、燃气、固话宽带、有线电视、交通罚款费用  WUYE：缴物业费  HK：信用卡还款  TX：手机充值 | [optional]
 **subBizType** | **string**| 业务子类型。  WATER：缴水费  ELECTRIC：缴电费  GAS：缴燃气费  COMMUN：缴固话宽带  CATV：缴有线电视费  TRAFFIC：缴交通罚款  WUYE：缴物业费  HK：信用卡还款  CZ：手机充值 | [optional]
 **chargeInst** | **string**| 支付宝缴费系统中的出账机构ID | [optional]
 **billKey** | **string**| 户号，机构针对于每户的水、电都会有唯一的标识户号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `validate()`

```php
validate($alipayEbppPdeductSignValidateModel): object
```

缴费直连代扣签约前置校验

服务窗代扣签约的前置校验接口，签约前，可以先调用该接口进行校验是否可以签约

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppPdeductSignApi(
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

$alipayEbppPdeductSignValidateModel = new \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignValidateModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignValidateModel

try {
    $result = $apiInstance->validate($alipayEbppPdeductSignValidateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppPdeductSignApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppPdeductSignValidateModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppPdeductSignValidateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
