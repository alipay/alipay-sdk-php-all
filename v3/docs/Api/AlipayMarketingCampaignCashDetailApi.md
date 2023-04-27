# Alipay\OpenAPISDK\AlipayMarketingCampaignCashDetailApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMarketingCampaignCashDetailApi.md#query) | **GET** /v3/alipay/marketing/campaign/cash/detail/query | 现金活动详情查询


## `query()`

```php
query($crowdNo): \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashDetailQueryResponseModel
```

现金活动详情查询

商户通过开放平台查询自己创建的现金活动详情

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignCashDetailApi(
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

$crowdNo = POYb84lfiKVdIfERAYsqPL_KQRIpfQbl47xfRmmPBlDMnSZ96O-zxUfKlHp5cxmx; // string | 现金活动号，通过<a href=\"https://opendocs.alipay.com/apis/api_5/alipay.marketing.campaign.cash.create\">alipay.marketing.campaign.cash.create</a>(创建现金活动)接口创建现金活动获取。

try {
    $result = $apiInstance->query($crowdNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignCashDetailApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **crowdNo** | **string**| 现金活动号，通过&lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_5/alipay.marketing.campaign.cash.create\&quot;&gt;alipay.marketing.campaign.cash.create&lt;/a&gt;(创建现金活动)接口创建现金活动获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashDetailQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
