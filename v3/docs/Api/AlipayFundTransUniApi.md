# Alipay\OpenAPISDK\AlipayFundTransUniApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer()**](AlipayFundTransUniApi.md#transfer) | **POST** /v3/alipay/fund/trans/uni/transfer | 单笔转账接口


## `transfer()`

```php
transfer($alipayFundTransUniTransferModel): \Alipay\OpenAPISDK\Model\AlipayFundTransUniTransferResponseModel
```

单笔转账接口

单笔转账接口是基于支付宝的资金处理能力，为了满足支付宝商家的转账需求，针对有部分开发能力的商家，提供通过API接口完成企业自身支付宝账户到支付宝账户的转账功能。 适用于：C2C现金红包的红包领取、B2C现金红包的红包发放、B2C单笔转账到支付宝账户等。<br /> <b>说明：本接口为公用接口，参数说明不针对特定产品。</b>不同产品入参请参考对应产品文档。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundTransUniApi(
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

$alipayFundTransUniTransferModel = new \Alipay\OpenAPISDK\Model\AlipayFundTransUniTransferModel(); // \Alipay\OpenAPISDK\Model\AlipayFundTransUniTransferModel

try {
    $result = $apiInstance->transfer($alipayFundTransUniTransferModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundTransUniApi->transfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundTransUniTransferModel** | **\Alipay\OpenAPISDK\Model\AlipayFundTransUniTransferModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundTransUniTransferResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
