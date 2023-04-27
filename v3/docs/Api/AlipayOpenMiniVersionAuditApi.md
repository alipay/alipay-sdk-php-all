# Alipay\OpenAPISDK\AlipayOpenMiniVersionAuditApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayOpenMiniVersionAuditApi.md#apply) | **POST** /v3/alipay/open/mini/version/audit/apply | 小程序提交审核
[**cancel()**](AlipayOpenMiniVersionAuditApi.md#cancel) | **POST** /v3/alipay/open/mini/version/audit/cancel | 小程序撤销审核


## `apply()`

```php
apply($appLogo, $data, $fifthLicensePic, $fifthScreenShot, $firstLicensePic, $firstScreenShot, $firstSpecialLicensePic, $fourthLicensePic, $fourthScreenShot, $outDoorPic, $secondLicensePic, $secondScreenShot, $secondSpecialLicensePic, $testFileName, $thirdLicensePic, $thirdScreenShot, $thirdSpecialLicensePic): \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyResponseModel
```

小程序提交审核

小程序提交审核。 1、本接口中关于小程序基础信息的一些字段例如小程序名称、小程序logo、客服电话等，这些信息如果你前期已经设置过，平台将会在你本次调用接口的时候，将上一次设置的信息自动填入，所以允许你本次调用时不传入。如果你前期还未设置过这些信息，则本次调用是需要必传的。具体的字段要求详见每个字段的描述。你可以用alipay.open.mini.version.detail.query接口查询小程序信息之前是否已经设置。 2、小程序版本信息例如小程序版本号、小程序版本描述，这些信息是需要你每次调用接口必传的。 3、本接口涉及到“审核流程拆分”、“审核加急”、“自动上架”的功能，具体功能详见接口字段audit_rule、speed_up、auto_online描述。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionAuditApi(
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

$appLogo = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel
$fifthLicensePic = "/path/to/file.txt"; // \SplFileObject
$fifthScreenShot = "/path/to/file.txt"; // \SplFileObject
$firstLicensePic = "/path/to/file.txt"; // \SplFileObject
$firstScreenShot = "/path/to/file.txt"; // \SplFileObject
$firstSpecialLicensePic = "/path/to/file.txt"; // \SplFileObject
$fourthLicensePic = "/path/to/file.txt"; // \SplFileObject
$fourthScreenShot = "/path/to/file.txt"; // \SplFileObject
$outDoorPic = "/path/to/file.txt"; // \SplFileObject
$secondLicensePic = "/path/to/file.txt"; // \SplFileObject
$secondScreenShot = "/path/to/file.txt"; // \SplFileObject
$secondSpecialLicensePic = "/path/to/file.txt"; // \SplFileObject
$testFileName = "/path/to/file.txt"; // \SplFileObject
$thirdLicensePic = "/path/to/file.txt"; // \SplFileObject
$thirdScreenShot = "/path/to/file.txt"; // \SplFileObject
$thirdSpecialLicensePic = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apply($appLogo, $data, $fifthLicensePic, $fifthScreenShot, $firstLicensePic, $firstScreenShot, $firstSpecialLicensePic, $fourthLicensePic, $fourthScreenShot, $outDoorPic, $secondLicensePic, $secondScreenShot, $secondSpecialLicensePic, $testFileName, $thirdLicensePic, $thirdScreenShot, $thirdSpecialLicensePic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionAuditApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appLogo** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel**|  | [optional]
 **fifthLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **fifthScreenShot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **firstLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **firstScreenShot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **firstSpecialLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **fourthLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **fourthScreenShot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **outDoorPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **secondLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **secondScreenShot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **secondSpecialLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **testFileName** | **\SplFileObject****\SplFileObject**|  | [optional]
 **thirdLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **thirdScreenShot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **thirdSpecialLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `cancel()`

```php
cancel($alipayOpenMiniVersionAuditCancelModel): object
```

小程序撤销审核

三方实例化小程序撤销审核

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionAuditApi(
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

$alipayOpenMiniVersionAuditCancelModel = new \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditCancelModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditCancelModel

try {
    $result = $apiInstance->cancel($alipayOpenMiniVersionAuditCancelModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionAuditApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenMiniVersionAuditCancelModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditCancelModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
