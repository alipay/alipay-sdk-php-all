# Alipay\OpenAPISDK\KoubeiMemberDataIsvApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](KoubeiMemberDataIsvApi.md#create) | **POST** /v3/koubei/member/data/isv/create | isv 会员CRM数据回流


## `create()`

```php
create($koubeiMemberDataIsvCreateModel): object
```

isv 会员CRM数据回流

isv 会员CRM数据回流：isv对接商户，回流会员信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMemberDataIsvApi(
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

$koubeiMemberDataIsvCreateModel = new \Alipay\OpenAPISDK\Model\KoubeiMemberDataIsvCreateModel(); // \Alipay\OpenAPISDK\Model\KoubeiMemberDataIsvCreateModel

try {
    $result = $apiInstance->create($koubeiMemberDataIsvCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMemberDataIsvApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMemberDataIsvCreateModel** | **\Alipay\OpenAPISDK\Model\KoubeiMemberDataIsvCreateModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
