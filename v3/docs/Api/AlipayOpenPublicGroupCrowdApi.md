# Alipay\OpenAPISDK\AlipayOpenPublicGroupCrowdApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenPublicGroupCrowdApi.md#query) | **POST** /v3/alipay/open/public/group/crowd/query | 人群数量查询


## `query()`

```php
query($alipayOpenPublicGroupCrowdQueryModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicGroupCrowdQueryResponseModel
```

人群数量查询

用户可以指定自己创建的分组，调用接口查询对应的人群数量，人群必须大于50人才能正常返回，否则报错。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicGroupCrowdApi(
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

$alipayOpenPublicGroupCrowdQueryModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicGroupCrowdQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicGroupCrowdQueryModel

try {
    $result = $apiInstance->query($alipayOpenPublicGroupCrowdQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicGroupCrowdApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicGroupCrowdQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicGroupCrowdQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicGroupCrowdQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
