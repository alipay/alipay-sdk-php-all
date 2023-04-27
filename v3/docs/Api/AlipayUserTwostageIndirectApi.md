# Alipay\OpenAPISDK\AlipayUserTwostageIndirectApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**callUse()**](AlipayUserTwostageIndirectApi.md#callUse) | **POST** /v3/alipay/user/twostage/indirect/use | 双联二阶段


## `callUse()`

```php
callUse($alipayUserTwostageIndirectUseModel): \Alipay\OpenAPISDK\Model\AlipayUserTwostageIndirectUseResponseModel
```

双联二阶段

间连模式通过双联向银行输出付款码查UID接口. 双联二阶段里，授权之后调用该接口，进行解码并校验双联pid、银行orgId、isv sourceId及学校smid之间的级联关系；检查授权关系；解码并返回用户uid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayUserTwostageIndirectApi(
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

$alipayUserTwostageIndirectUseModel = new \Alipay\OpenAPISDK\Model\AlipayUserTwostageIndirectUseModel(); // \Alipay\OpenAPISDK\Model\AlipayUserTwostageIndirectUseModel

try {
    $result = $apiInstance->callUse($alipayUserTwostageIndirectUseModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayUserTwostageIndirectApi->callUse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayUserTwostageIndirectUseModel** | **\Alipay\OpenAPISDK\Model\AlipayUserTwostageIndirectUseModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayUserTwostageIndirectUseResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
