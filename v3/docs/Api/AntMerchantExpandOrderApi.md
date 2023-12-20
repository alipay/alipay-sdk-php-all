# Alipay\OpenAPISDK\AntMerchantExpandOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AntMerchantExpandOrderApi.md#query) | **GET** /v3/ant/merchant/order/{order_id} | 商户申请单查询


## `query()`

```php
query($orderId): \Alipay\OpenAPISDK\Model\AntMerchantExpandOrderQueryResponseModel
```

商户申请单查询

服务商根据申请单id，查询自己提交的商户进件、管理等申请单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandOrderApi(
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

$orderId = 2017112200502000000004754299; // string | 申请单 id。 1.蚂蚁门店管理场景：通过 <a href=\"https://opendocs.alipay.com/open/05afbc4a_ant.merchant.expand.shop.create?scene=common&pathHash=bf443b73\"> ant.merchant.expand.shop.create</a>(蚂蚁店铺创建)接口进件时返回的order_id。 2.直付通二级商户进件场景：通过<a href=\"https://opendocs.alipay.com/open/028xr0?pathHash=c9ca6d68\">ant.merchant.expand.indirect.zft.create</a>(直付通二级商户创建)接口进件时返回的order_id。

try {
    $result = $apiInstance->query($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| 申请单 id。 1.蚂蚁门店管理场景：通过 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/open/05afbc4a_ant.merchant.expand.shop.create?scene&#x3D;common&amp;pathHash&#x3D;bf443b73\&quot;&gt; ant.merchant.expand.shop.create&lt;/a&gt;(蚂蚁店铺创建)接口进件时返回的order_id。 2.直付通二级商户进件场景：通过&lt;a href&#x3D;\&quot;https://opendocs.alipay.com/open/028xr0?pathHash&#x3D;c9ca6d68\&quot;&gt;ant.merchant.expand.indirect.zft.create&lt;/a&gt;(直付通二级商户创建)接口进件时返回的order_id。 |

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
