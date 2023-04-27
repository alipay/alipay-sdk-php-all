# Alipay\OpenAPISDK\ZhimaCustomerJobworthAuthenticationApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](ZhimaCustomerJobworthAuthenticationApi.md#query) | **GET** /v3/zhima/customer/jobworth/authentication | 职得身份认证查询接口


## `query()`

```php
query($connKey, $onceToken, $queryType, $identityType, $serviceId, $userId, $openId, $certNo, $certType): \Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthAuthenticationQueryResponseModel
```

职得身份认证查询接口

根据一次性token查询用户身份认证结果

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\ZhimaCustomerJobworthAuthenticationApi(
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

$connKey = uuid; // string | 调用第一步创建接口的out_agreement_no，由外部传入
$onceToken = uuid; // string | 查询身份认证结果的凭证，在认证结果到达终态后只允许查询成功一次，若需要再次查询，则需要调用第一个接口再拉起受理台
$queryType = exact\dim; // string | exact:精确查询,dim:模糊查询
$identityType = 01，02，03; // string | 01:医生，02:教师，具体参考文档
$serviceId = 2019120400000000000004450100; // string | 信用服务id，商家接入产品功能包时有运营同学分配
$userId = 20881029102921; // string | 蚂蚁统一会员ID 和身份证任选一个传入
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 蚂蚁统一会员ID 和身份证任选一个传入
$certNo = 420192931233123123; // string | 证件号
$certType = 0; // string | \"身份证 : 0\"，\"护照: 1\"，\"台湾往来通行证：4\",\"港澳往来通行证：3\", \"回乡证: 2\"；\"港澳证件：5\"

try {
    $result = $apiInstance->query($connKey, $onceToken, $queryType, $identityType, $serviceId, $userId, $openId, $certNo, $certType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZhimaCustomerJobworthAuthenticationApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connKey** | **string**| 调用第一步创建接口的out_agreement_no，由外部传入 | [optional]
 **onceToken** | **string**| 查询身份认证结果的凭证，在认证结果到达终态后只允许查询成功一次，若需要再次查询，则需要调用第一个接口再拉起受理台 | [optional]
 **queryType** | **string**| exact:精确查询,dim:模糊查询 | [optional]
 **identityType** | **string**| 01:医生，02:教师，具体参考文档 | [optional]
 **serviceId** | **string**| 信用服务id，商家接入产品功能包时有运营同学分配 | [optional]
 **userId** | **string**| 蚂蚁统一会员ID 和身份证任选一个传入 | [optional]
 **openId** | **string**| 蚂蚁统一会员ID 和身份证任选一个传入 | [optional]
 **certNo** | **string**| 证件号 | [optional]
 **certType** | **string**| \&quot;身份证 : 0\&quot;，\&quot;护照: 1\&quot;，\&quot;台湾往来通行证：4\&quot;,\&quot;港澳往来通行证：3\&quot;, \&quot;回乡证: 2\&quot;；\&quot;港澳证件：5\&quot; | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\ZhimaCustomerJobworthAuthenticationQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
