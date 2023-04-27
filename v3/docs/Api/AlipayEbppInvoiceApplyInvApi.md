# Alipay\OpenAPISDK\AlipayEbppInvoiceApplyInvApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AlipayEbppInvoiceApplyInvApi.md#upload) | **PUT** /v3/alipay/ebpp/invoice/apply/inv/upload | 发票回传


## `upload()`

```php
upload($alipayEbppInvoiceApplyInvUploadModel): \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyInvUploadResponseModel
```

发票回传

发票回传接口适用于以下场景： 1、间联开票模式：阿里发票平台向ISV提交了原始发票申请，商户在ISV后台开具发票成功后，基于申请ID(apply_id)回传发票至阿里发票平台归集与交付。 2、直连开票模式：阿里发票平台请求ISV开票，ISV系统异步执行开票事务后，基于开票流水号(serial_no)回传开票结果至阿里发票平台归集与交付。 3、ISV直接回传发票给阿里发票平台，进行归集，并交付给业务前台和用户。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEbppInvoiceApplyInvApi(
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

$alipayEbppInvoiceApplyInvUploadModel = new \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyInvUploadModel(); // \Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyInvUploadModel

try {
    $result = $apiInstance->upload($alipayEbppInvoiceApplyInvUploadModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEbppInvoiceApplyInvApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayEbppInvoiceApplyInvUploadModel** | **\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyInvUploadModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEbppInvoiceApplyInvUploadResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
