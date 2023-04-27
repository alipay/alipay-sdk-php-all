# Alipay\OpenAPISDK\AlipayEcoMycarParkingConfigApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEcoMycarParkingConfigApi.md#query) | **GET** /v3/alipay/eco/mycar/parking/config/query | ISV系统配置查询接口
[**set()**](AlipayEcoMycarParkingConfigApi.md#set) | **POST** /v3/alipay/eco/mycar/parking/config/set | 停车ISV系统配置接口


## `query()`

```php
query($interfaceName, $interfaceType): \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingConfigQueryResponseModel
```

ISV系统配置查询接口

ISV通过该接口，查询ISV已注册到车主平台停车业务系统配置信息。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingConfigApi(
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

$interfaceName = alipay.eco.mycar.parking.userpage.query; // string | 接口名称。H5传入参数固定值：alipay.eco.mycar.parking.userpage.query； 小程序传入参数固定值：alipay.eco.mycar.parking.isv.homepage； 协议状态变更通知传入参数固定值： alipay.eco.mycar.parking.agreement.notify。
$interfaceType = interface_page; // string | 接口类型。H5、小程序传入参数固定值：interface_page； 通知接口传入参数固定值：interface_service。

try {
    $result = $apiInstance->query($interfaceName, $interfaceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingConfigApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interfaceName** | **string**| 接口名称。H5传入参数固定值：alipay.eco.mycar.parking.userpage.query； 小程序传入参数固定值：alipay.eco.mycar.parking.isv.homepage； 协议状态变更通知传入参数固定值： alipay.eco.mycar.parking.agreement.notify。 | [optional]
 **interfaceType** | **string**| 接口类型。H5、小程序传入参数固定值：interface_page； 通知接口传入参数固定值：interface_service。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingConfigQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `set()`

```php
set($alipayEcoMycarParkingConfigSetModel): object
```

停车ISV系统配置接口

ISV通过该接口，配置车主平台各业务所需要的ISV的系统配置信息。如果接口配置存在则覆盖原有的接口信息。通过该接口设置的配置信息是立刻生效的，在调用该接口修改配置信息时请先评估对线上业务的影响，并做好处理方案。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingConfigApi(
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

$alipayEcoMycarParkingConfigSetModel = new \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingConfigSetModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingConfigSetModel

try {
    $result = $apiInstance->set($alipayEcoMycarParkingConfigSetModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingConfigApi->set: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoMycarParkingConfigSetModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingConfigSetModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
