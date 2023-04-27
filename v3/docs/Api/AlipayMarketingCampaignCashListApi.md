# Alipay\OpenAPISDK\AlipayMarketingCampaignCashListApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayMarketingCampaignCashListApi.md#query) | **GET** /v3/alipay/marketing/campaign/cash/list/query | 现金活动列表查询


## `query()`

```php
query($campStatus, $pageSize, $pageIndex): \Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashListQueryResponseModel
```

现金活动列表查询

商户通过开放平台查询自己创建的现金活动列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCampaignCashListApi(
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

$campStatus = PAID; // string | 要查询的活动状态,不填默认为 ALL 返回所有类型。枚举支持: *ALL：所有类型的活动。 *CREATED：已创建未打款。 *PAID：已打款。 *READY：活动已开始。 *PAUSE：活动已暂停。 *CLOSED：活动已结束。 *SETTLE：活动已清算。
$pageSize = 10; // string | 分页查询时每页返回的列表大小，每页数据最大为 50。
$pageIndex = 1; // string | 分页查询时的页码，从1开始

try {
    $result = $apiInstance->query($campStatus, $pageSize, $pageIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCampaignCashListApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campStatus** | **string**| 要查询的活动状态,不填默认为 ALL 返回所有类型。枚举支持: *ALL：所有类型的活动。 *CREATED：已创建未打款。 *PAID：已打款。 *READY：活动已开始。 *PAUSE：活动已暂停。 *CLOSED：活动已结束。 *SETTLE：活动已清算。 | [optional]
 **pageSize** | **string**| 分页查询时每页返回的列表大小，每页数据最大为 50。 | [optional]
 **pageIndex** | **string**| 分页查询时的页码，从1开始 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCampaignCashListQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
