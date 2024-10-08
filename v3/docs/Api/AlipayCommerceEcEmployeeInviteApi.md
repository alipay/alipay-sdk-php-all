# Alipay\OpenAPISDK\AlipayCommerceEcEmployeeInviteApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayCommerceEcEmployeeInviteApi.md#query) | **GET** /v3/alipay/commerce/ec/employee/invite | 获取员工签约激活链接


## `query()`

```php
query($enterpriseId, $employeeId, $pageContentCode, $withholdingSignStr, $createShareCode): \Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInviteQueryResponseModel
```

获取员工签约激活链接

获取员工签约激活链接

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayCommerceEcEmployeeInviteApi(
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

$enterpriseId = 2088985758939; // string | 企业id
$employeeId = 2288099887700000; // string | 企业码员工ID，签约适用对象为指定员工时填写
$pageContentCode = PCC_STANDARD; // string | 用于展示不同的页面文案，使用标准页面文案是无需传值
$withholdingSignStr = biz_content=%7B%22access_params%22%3A%7B%22personal_product_code%22%3A%22GENERAL_WITHHOLDING_P%22%2C%22sign_scene%22%3A%22INDUSTRY%7CMULTI_MEDIA%22%7D&sign=111&app_id=2017090501336035&method=alipay.user.agreement.page.sign&version=1.0; // string | 代扣签约串。需要签约代扣协议时，必传，返回的签约链接会拼接上代扣签约串。
$createShareCode = Y; // string | 是否生成签约吱口令，不传默认为N

try {
    $result = $apiInstance->query($enterpriseId, $employeeId, $pageContentCode, $withholdingSignStr, $createShareCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayCommerceEcEmployeeInviteApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **string**| 企业id | [optional]
 **employeeId** | **string**| 企业码员工ID，签约适用对象为指定员工时填写 | [optional]
 **pageContentCode** | **string**| 用于展示不同的页面文案，使用标准页面文案是无需传值 | [optional]
 **withholdingSignStr** | **string**| 代扣签约串。需要签约代扣协议时，必传，返回的签约链接会拼接上代扣签约串。 | [optional]
 **createShareCode** | **string**| 是否生成签约吱口令，不传默认为N | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayCommerceEcEmployeeInviteQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
