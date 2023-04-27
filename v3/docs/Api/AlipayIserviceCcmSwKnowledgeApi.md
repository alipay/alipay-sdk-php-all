# Alipay\OpenAPISDK\AlipayIserviceCcmSwKnowledgeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**modify()**](AlipayIserviceCcmSwKnowledgeApi.md#modify) | **POST** /v3/alipay/iservice/ccm/sw/knowledge/modify | 知识库问答管理


## `modify()`

```php
modify($alipayIserviceCcmSwKnowledgeModifyModel): \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwKnowledgeModifyResponseModel
```

知识库问答管理

知识库问答管理

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayIserviceCcmSwKnowledgeApi(
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

$alipayIserviceCcmSwKnowledgeModifyModel = new \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwKnowledgeModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwKnowledgeModifyModel

try {
    $result = $apiInstance->modify($alipayIserviceCcmSwKnowledgeModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayIserviceCcmSwKnowledgeApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayIserviceCcmSwKnowledgeModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwKnowledgeModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayIserviceCcmSwKnowledgeModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
