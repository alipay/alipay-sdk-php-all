# Alipay\OpenAPISDK\AlipayTradeSettleApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirm()**](AlipayTradeSettleApi.md#confirm) | **POST** /v3/alipay/trade/settle/confirm | 统一收单确认结算接口


## `confirm()`

```php
confirm($alipayTradeSettleConfirmModel): \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmResponseModel
```

统一收单确认结算接口

用户付款后，平台上的卖家发货，用户收到商品确认收货后，平台通过确认结算接口，将交易款结算给指定的卖家账户。 单笔结算到卖家余额的场景支持分账冻结。在确认结算时，传入冻结标识 royalty_freeze=true，资金结算到卖家支付宝余额后，会先冻结在不可用余额中，后续分账将自动从冻结余额划出，平台商可调用分账完结释放冻结资金，系统默认在冻结30天后自动解冻。解冻后，仍可以发起分账。为保证分账成功率，请尽可能在分账冻结期内分账。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayTradeSettleApi(
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

$alipayTradeSettleConfirmModel = new \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel(); // \Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel

try {
    $result = $apiInstance->confirm($alipayTradeSettleConfirmModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayTradeSettleApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayTradeSettleConfirmModel** | **\Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayTradeSettleConfirmResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
