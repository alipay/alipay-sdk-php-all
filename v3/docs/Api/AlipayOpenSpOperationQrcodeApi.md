# Alipay\OpenAPISDK\AlipayOpenSpOperationQrcodeApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenSpOperationQrcodeApi.md#query) | **GET** /v3/alipay/open/sp/operation/qrcode/query | 查询代运营授权或者账号绑定二维码


## `query()`

```php
query($outBizNo, $operateType, $merchantNo, $alipayAccount, $accessProductCode, $isvScenePermissions): \Alipay\OpenAPISDK\Model\AlipayOpenSpOperationQrcodeQueryResponseModel
```

查询代运营授权或者账号绑定二维码

面向服务商，查询发起代运营授权或者账号绑定的二维码。代间联商户代运营时，推荐使用接口同步返回的recommend_accounts字段中的账号扫码确认。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenSpOperationQrcodeApi(
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

$outBizNo = 2020124234523465636345634; // string | 外部操作流水，由服务商自定义，需确保每次操作唯一。仅支持数字、字母、下划线组合。
$operateType = OPERATION_AUTH; // string | 代运营操作类型。取值如下： * ACCOUNT_BIND：账号绑定，仅支持间连商户。 * OPERATION_AUTH：代运营授权，支持间连、直连商户。
$merchantNo = 2088XXXX; // string | 支付宝商户号。注意仅支持 2088 开头的间连商户。 若被代运营者是间连商户，则 merchant_no 必填； 若为直连商户，则 merchant_no 和 alipay_account 不能同时为空，都有值优先取 merchant_no。
$alipayAccount = xxx@gmail.com; // string | 支付宝登录账号。通常为手机号或者邮箱。 若被代运营者是间连商户，该字段无需填写。 若为直连商户，则 merchant_no 和 alipay_account 不能同时为空，都有值优先取 merchant_no。
$accessProductCode = OPENAPI_AUTH_DEFAULT; // string | 接入的产品编号。 操作类型为绑定的，填OPENAPI_BIND_DEFAULT; 操作类型为授权的，填OPENAPI_AUTH_DEFAULT
$isvScenePermissions = SHOP_MANAGE:SHOP_MANAGE_BASE;PROMOTION_MANAGE:PROMOTION_MANAGE_BASE; // string | 场景授权列表结构结构：场景codeA:权限code1,权限code2;场景codeB:权限code1,权限code2;

try {
    $result = $apiInstance->query($outBizNo, $operateType, $merchantNo, $alipayAccount, $accessProductCode, $isvScenePermissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenSpOperationQrcodeApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outBizNo** | **string**| 外部操作流水，由服务商自定义，需确保每次操作唯一。仅支持数字、字母、下划线组合。 | [optional]
 **operateType** | **string**| 代运营操作类型。取值如下： * ACCOUNT_BIND：账号绑定，仅支持间连商户。 * OPERATION_AUTH：代运营授权，支持间连、直连商户。 | [optional]
 **merchantNo** | **string**| 支付宝商户号。注意仅支持 2088 开头的间连商户。 若被代运营者是间连商户，则 merchant_no 必填； 若为直连商户，则 merchant_no 和 alipay_account 不能同时为空，都有值优先取 merchant_no。 | [optional]
 **alipayAccount** | **string**| 支付宝登录账号。通常为手机号或者邮箱。 若被代运营者是间连商户，该字段无需填写。 若为直连商户，则 merchant_no 和 alipay_account 不能同时为空，都有值优先取 merchant_no。 | [optional]
 **accessProductCode** | **string**| 接入的产品编号。 操作类型为绑定的，填OPENAPI_BIND_DEFAULT; 操作类型为授权的，填OPENAPI_AUTH_DEFAULT | [optional]
 **isvScenePermissions** | **string**| 场景授权列表结构结构：场景codeA:权限code1,权限code2;场景codeB:权限code1,权限code2; | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenSpOperationQrcodeQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
