# Alipay\OpenAPISDK\AlipayMarketingCampaignCashApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayMarketingCampaignCashApi.md#create) | **POST** /v3/alipay/marketing/campaign/cash/create | 创建现金活动
[**trigger()**](AlipayMarketingCampaignCashApi.md#trigger) | **POST** /v3/alipay/marketing/campaign/cash/trigger | 触发现金红包活动


## `create()`

```php
create($alipayMarketingCampaignCashCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashCreateResponseModel
```

创建现金活动

商户通过开放平台创建商户活动

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignCashApi(
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

$alipayMarketingCampaignCashCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashCreateModel

try {
    $result = $apiInstance->create($alipayMarketingCampaignCashCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignCashApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCampaignCashCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `trigger()`

```php
trigger($alipayMarketingCampaignCashTriggerModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashTriggerResponseModel
```

触发现金红包活动

用户通过开放平台参与现金活动

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignCashApi(
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

$alipayMarketingCampaignCashTriggerModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashTriggerModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashTriggerModel

try {
    $result = $apiInstance->trigger($alipayMarketingCampaignCashTriggerModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignCashApi->trigger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCampaignCashTriggerModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashTriggerModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashTriggerResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
