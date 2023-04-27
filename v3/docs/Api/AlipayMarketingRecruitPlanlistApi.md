# Alipay\OpenAPISDK\AlipayMarketingRecruitPlanlistApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMarketingRecruitPlanlistApi.md#query) | **POST** /v3/alipay/marketing/recruit/planlist/query | 查询可报名的方案列表


## `query()`

```php
query($alipayMarketingRecruitPlanlistQueryModel): \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitPlanlistQueryResponseModel
```

查询可报名的方案列表

查询可报名的方案列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingRecruitPlanlistApi(
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

$alipayMarketingRecruitPlanlistQueryModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitPlanlistQueryModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingRecruitPlanlistQueryModel

try {
    $result = $apiInstance->query($alipayMarketingRecruitPlanlistQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingRecruitPlanlistApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingRecruitPlanlistQueryModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitPlanlistQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingRecruitPlanlistQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
