# Alipay\OpenAPISDK\AlipayOpenInviteOrderApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenInviteOrderApi.md#query) | **GET** /v3/alipay/open/invite/order/query | 查询签约申请单状态


## `query()`

```php
query($isvBizId, $alipayLogonId): \Alipay\OpenAPISDK\Model\AlipayOpenInviteOrderQueryResponseModel
```

查询签约申请单状态

创建签约授权流程后，查询对应产品签约申请单的状态

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInviteOrderApi(
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

$isvBizId = 2017110616474516400082883; // string | isv业务系统单据编号
$alipayLogonId = fykevbdz6766@alitest.com; // string | 商家的支付宝账号，如果调用alipay.open.invite.order.create接口时有传入支付宝账号，则这里查询签约状态时必须要传

try {
    $result = $apiInstance->query($isvBizId, $alipayLogonId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInviteOrderApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **isvBizId** | **string**| isv业务系统单据编号 | [optional]
 **alipayLogonId** | **string**| 商家的支付宝账号，如果调用alipay.open.invite.order.create接口时有传入支付宝账号，则这里查询签约状态时必须要传 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInviteOrderQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
