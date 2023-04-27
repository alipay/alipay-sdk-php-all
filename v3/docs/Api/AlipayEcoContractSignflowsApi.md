# Alipay\OpenAPISDK\AlipayEcoContractSignflowsApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayEcoContractSignflowsApi.md#create) | **POST** /v3/alipay/eco/contract/signflows/create | 创建电子合同签署流程(E签宝)


## `create()`

```php
create($targetAppId, $alipayEcoContractSignflowsCreateModel): \Alipay\OpenAPISDK\Model\AlipayEcoContractSignflowsCreateResponseModel
```

创建电子合同签署流程(E签宝)

根据配置好的合同模板，调用接口填充内容并指定签署人创建电子合同签署流程。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoContractSignflowsApi(
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
$alipayEcoContractSignflowsCreateModel = new \Alipay\OpenAPISDK\Model\AlipayEcoContractSignflowsCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayEcoContractSignflowsCreateModel

try {
    $result = $apiInstance->create($targetAppId, $alipayEcoContractSignflowsCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoContractSignflowsApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetAppId** | **string**| 目标isv应用ID | [optional]
 **alipayEcoContractSignflowsCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayEcoContractSignflowsCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoContractSignflowsCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
