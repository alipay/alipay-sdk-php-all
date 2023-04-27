# Alipay\OpenAPISDK\AlipayPcreditHuabeiAuthRefundApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayPcreditHuabeiAuthRefundApi.md#apply) | **PUT** /v3/alipay/pcredit/huabei/auth/refund/apply | 花芝结算扣款费用逆向退款申请


## `apply()`

```php
apply($alipayPcreditHuabeiAuthRefundApplyModel): \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthRefundApplyResponseModel
```

花芝结算扣款费用逆向退款申请

用于1)芝麻GO会员费扣款逆向退款操作2）周期扣款每期扣款逆向退款操作

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayPcreditHuabeiAuthRefundApi(
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

$alipayPcreditHuabeiAuthRefundApplyModel = new \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthRefundApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthRefundApplyModel

try {
    $result = $apiInstance->apply($alipayPcreditHuabeiAuthRefundApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayPcreditHuabeiAuthRefundApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayPcreditHuabeiAuthRefundApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthRefundApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayPcreditHuabeiAuthRefundApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
