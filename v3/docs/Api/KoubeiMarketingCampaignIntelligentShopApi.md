# Alipay\OpenAPISDK\KoubeiMarketingCampaignIntelligentShopApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](KoubeiMarketingCampaignIntelligentShopApi.md#consult) | **POST** /v3/koubei/marketing/campaign/intelligent/shop/consult | 智能营销门店咨询


## `consult()`

```php
consult($koubeiMarketingCampaignIntelligentShopConsultModel): \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentShopConsultResponseModel
```

智能营销门店咨询

咨询完智能营销活动模型后，可以查询商户的符合智能营销活动标准的门店

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignIntelligentShopApi(
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

$koubeiMarketingCampaignIntelligentShopConsultModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentShopConsultModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentShopConsultModel

try {
    $result = $apiInstance->consult($koubeiMarketingCampaignIntelligentShopConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignIntelligentShopApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignIntelligentShopConsultModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentShopConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentShopConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
