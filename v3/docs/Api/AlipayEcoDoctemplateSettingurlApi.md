# Alipay\OpenAPISDK\AlipayEcoDoctemplateSettingurlApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEcoDoctemplateSettingurlApi.md#query) | **GET** /v3/alipay/eco/doctemplate/settingurl/query | 获取合同模板设置地址（E签宝）


## `query()`

```php
query($targetAppId, $templateId): \Alipay\OpenAPISDK\Model\AlipayEcoDoctemplateSettingurlQueryResponseModel
```

获取合同模板设置地址（E签宝）

通过创建合同模板接口返回的模板ID（templateId）获取合同模板的配置地址。在模板设置页面上进行模板输入组件、签署区设置后，即可基于模板发起合同签署。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoDoctemplateSettingurlApi(
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

$targetAppId = 'targetAppId_example'; // string | 目标isv应用ID
$templateId = 0016801a4ec24e548a93b094856b735c; // string | 合同模板id。通过<a href =\"https://opendocs.alipay.com/apis/api_50/alipay.eco.doc.template.create\">创建合同模版</a>（alipay.eco.doc.template.create）接口获取。

try {
    $result = $apiInstance->query($targetAppId, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoDoctemplateSettingurlApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **templateId** | **string**| 合同模板id。通过&lt;a href &#x3D;\&quot;https://opendocs.alipay.com/apis/api_50/alipay.eco.doc.template.create\&quot;&gt;创建合同模版&lt;/a&gt;（alipay.eco.doc.template.create）接口获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoDoctemplateSettingurlQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
