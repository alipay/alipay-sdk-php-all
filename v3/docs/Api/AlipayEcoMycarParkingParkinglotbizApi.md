# Alipay\OpenAPISDK\AlipayEcoMycarParkingParkinglotbizApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer()**](AlipayEcoMycarParkingParkinglotbizApi.md#transfer) | **POST** /v3/alipay/eco/mycar/parking/parkinglotbiz/transfer | 车场业务归属配置


## `transfer()`

```php
transfer($alipayEcoMycarParkingParkinglotbizTransferModel): object
```

车场业务归属配置

解决车场多isv接管问题，可以通过归属灵活控制权限。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoMycarParkingParkinglotbizApi(
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

$alipayEcoMycarParkingParkinglotbizTransferModel = new \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingParkinglotbizTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingParkinglotbizTransferModel

try {
    $result = $apiInstance->transfer($alipayEcoMycarParkingParkinglotbizTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoMycarParkingParkinglotbizApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEcoMycarParkingParkinglotbizTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoMycarParkingParkinglotbizTransferModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
