# Alipay\OpenAPISDK\AlipayOpenMiniTipsStatisticApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniTipsStatisticApi.md#query) | **GET** /v3/alipay/open/mini/tips/statistic/query | 小程序收藏引导汇总数据查询


## `query()`

```php
query($deliveryId, $queryType, $startDate, $endDate): \Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsStatisticQueryResponseModel
```

小程序收藏引导汇总数据查询

小程序收藏引导tips文案投放汇总数据查询接口。可查询小程序维度或活动维度的tips曝光uv，收藏uv，以及收藏转化率。请先配置投放活动，否则查询结果返回参数为空。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniTipsStatisticApi(
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

$deliveryId = 20220308000000934758; // string | 收藏引导投放活动ID，供查询收藏引导活动配置接口调用 ，当以小程序维度查询数据（query_type为app）时delivery_id为空
$queryType = app; // string | 查询类型，表示以当前维度进行数据聚合。
$startDate = 20220322; // string | 查询开始日期，精度为天
$endDate = 20220328; // string | 查询截止日期，精度为天

try {
    $result = $apiInstance->query($deliveryId, $queryType, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniTipsStatisticApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deliveryId** | **string**| 收藏引导投放活动ID，供查询收藏引导活动配置接口调用 ，当以小程序维度查询数据（query_type为app）时delivery_id为空 | [optional]
 **queryType** | **string**| 查询类型，表示以当前维度进行数据聚合。 | [optional]
 **startDate** | **string**| 查询开始日期，精度为天 | [optional]
 **endDate** | **string**| 查询截止日期，精度为天 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniTipsStatisticQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
