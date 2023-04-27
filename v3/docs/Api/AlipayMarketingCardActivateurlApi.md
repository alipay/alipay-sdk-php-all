# Alipay\OpenAPISDK\AlipayMarketingCardActivateurlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayMarketingCardActivateurlApi.md#apply) | **POST** /v3/alipay/marketing/card/activateurl/apply | 获取会员卡领卡投放链接


## `apply()`

```php
apply($alipayMarketingCardActivateurlApplyModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateurlApplyResponseModel
```

获取会员卡领卡投放链接

会员卡开卡业务，开发者通过该接口获取用户开卡链接，用于会员卡投放。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardActivateurlApi(
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

$alipayMarketingCardActivateurlApplyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateurlApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateurlApplyModel

try {
    $result = $apiInstance->apply($alipayMarketingCardActivateurlApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardActivateurlApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardActivateurlApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateurlApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardActivateurlApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
