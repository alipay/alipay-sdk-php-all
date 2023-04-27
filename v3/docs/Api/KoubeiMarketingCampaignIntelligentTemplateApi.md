# Alipay\OpenAPISDK\KoubeiMarketingCampaignIntelligentTemplateApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**consult()**](KoubeiMarketingCampaignIntelligentTemplateApi.md#consult) | **POST** /v3/koubei/marketing/campaign/intelligent/template/consult | 智能营销模板咨询


## `consult()`

```php
consult($koubeiMarketingCampaignIntelligentTemplateConsultModel): \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentTemplateConsultResponseModel
```

智能营销模板咨询

咨询可使用的智能营销模板

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\KoubeiMarketingCampaignIntelligentTemplateApi(
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

$koubeiMarketingCampaignIntelligentTemplateConsultModel = new \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentTemplateConsultModel(); // \Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentTemplateConsultModel

try {
    $result = $apiInstance->consult($koubeiMarketingCampaignIntelligentTemplateConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KoubeiMarketingCampaignIntelligentTemplateApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **koubeiMarketingCampaignIntelligentTemplateConsultModel** | **\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentTemplateConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\KoubeiMarketingCampaignIntelligentTemplateConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
