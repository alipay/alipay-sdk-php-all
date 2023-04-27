# Alipay\OpenAPISDK\AlipayPcreditHuabeiAuthSettleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayPcreditHuabeiAuthSettleApi.md#apply) | **PUT** /v3/alipay/pcredit/huabei/auth/settle/apply | 花芝轻会员结算申请


## `apply()`

```php
apply($alipayPcreditHuabeiAuthSettleApplyModel): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthSettleApplyResponseModel
```

花芝轻会员结算申请

用户已经开通花芝轻会员协议后，商户通过此接口解冻转支付用户冻结金额。传入金额必须小于等于冻结金额

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthSettleApi(
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

$alipayPcreditHuabeiAuthSettleApplyModel = new \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthSettleApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthSettleApplyModel

try {
    $result = $apiInstance->apply($alipayPcreditHuabeiAuthSettleApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthSettleApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayPcreditHuabeiAuthSettleApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthSettleApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthSettleApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
