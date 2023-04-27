# Alipay\OpenAPISDK\AlipayMerchantIotDeviceApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bind()**](AlipayMerchantIotDeviceApi.md#bind) | **POST** /v3/alipay/merchant/iot/device/bind | IoT设备绑定门店
[**query()**](AlipayMerchantIotDeviceApi.md#query) | **GET** /v3/alipay/merchant/iot/device/query | IoT设备绑定关系查询
[**verify()**](AlipayMerchantIotDeviceApi.md#verify) | **POST** /v3/alipay/merchant/iot/device/verify | IoT设备绑定校验


## `bind()`

```php
bind($alipayMerchantIotDeviceBindModel): object
```

IoT设备绑定门店

同步IoT设备、商户和门店的绑定关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIotDeviceApi(
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

$alipayMerchantIotDeviceBindModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceBindModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceBindModel

try {
    $result = $apiInstance->bind($alipayMerchantIotDeviceBindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIotDeviceApi->bind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantIotDeviceBindModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceBindModel**|  | [optional]

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
query($deviceIdType, $bizTid, $supplierId, $deviceSn): \Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceQueryResponseModel
```

IoT设备绑定关系查询

通过设备唯一标识查询设备绑定关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIotDeviceApi(
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

$deviceIdType = SN; // string | 可选方式 [ID,SN]。ID-使用biztid作为设备唯一识别标识；SN-使用supplier_id、device_sn联合作为设备唯一识别标识。由于不同机型的supplier_id不同，推荐使用 ID 。
$bizTid = 01017gV1CZ1XxASNbqkTJqchletNyVXtsKy1PAs4FKZ6tjRMqyMG2Zk; // string | 设备 ID ，device_id_type 为 ID 时填写。
$supplierId = 201812271300540049; // string | 设备供应商ID ，device_id_type 为 SN 时填写。需注意不同机型的供应商ID可能不同。
$deviceSn = QCF420190316000107; // string | 设备序列号 ，device_id_type 为 SN 时填写。需配合supplier_id使用。

try {
    $result = $apiInstance->query($deviceIdType, $bizTid, $supplierId, $deviceSn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIotDeviceApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceIdType** | **string**| 可选方式 [ID,SN]。ID-使用biztid作为设备唯一识别标识；SN-使用supplier_id、device_sn联合作为设备唯一识别标识。由于不同机型的supplier_id不同，推荐使用 ID 。 | [optional]
 **bizTid** | **string**| 设备 ID ，device_id_type 为 ID 时填写。 | [optional]
 **supplierId** | **string**| 设备供应商ID ，device_id_type 为 SN 时填写。需注意不同机型的供应商ID可能不同。 | [optional]
 **deviceSn** | **string**| 设备序列号 ，device_id_type 为 SN 时填写。需配合supplier_id使用。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `verify()`

```php
verify($alipayMerchantIotDeviceVerifyModel): object
```

IoT设备绑定校验

校验IoT设备和商户收单账号的对应关系

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMerchantIotDeviceApi(
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

$alipayMerchantIotDeviceVerifyModel = new \Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceVerifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceVerifyModel

try {
    $result = $apiInstance->verify($alipayMerchantIotDeviceVerifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMerchantIotDeviceApi->verify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMerchantIotDeviceVerifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMerchantIotDeviceVerifyModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
