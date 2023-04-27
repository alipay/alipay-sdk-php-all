# Alipay\OpenAPISDK\AlipayMobilePublicFollowApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList()**](AlipayMobilePublicFollowApi.md#callList) | **GET** /v3/alipay/mobile/public/follow/list | 获取关注者列表


## `callList()`

```php
callList($bizContent): \Alipay\OpenAPISDK\Model\AlipayMobilePublicFollowListResponseModel
```

获取关注者列表

公众号可通过本接口来获取帐号的关注者列表，关注者列表由一串userId组成。一次拉取调用最多拉取10000个关注者的userId，可以通过多次拉取的方式来满足需求。  公众号可通过本接口来获取帐号的关注者列表，关注者列表由一串userId组成。一次拉取调用最多拉取10000个关注者的userId，可以通过多次拉取的方式来满足需求。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMobilePublicFollowApi(
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

$bizContent = {"nextUserId":"2088102123322367"}; // string | 当nextUserId为空时,代表查询第一组,如果有值时以当前值为准查询下一组  <a href=\"https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7386797.0.0.eZqycg&treeId=53&articleId=103525&docType=1\">详情请见</a>

try {
    $result = $apiInstance->callList($bizContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMobilePublicFollowApi->callList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizContent** | **string**| 当nextUserId为空时,代表查询第一组,如果有值时以当前值为准查询下一组  &lt;a href&#x3D;\&quot;https://doc.open.alipay.com/doc2/detail.htm?spm&#x3D;a219a.7386797.0.0.eZqycg&amp;treeId&#x3D;53&amp;articleId&#x3D;103525&amp;docType&#x3D;1\&quot;&gt;详情请见&lt;/a&gt; | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMobilePublicFollowListResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
