# Alipay\OpenAPISDK\AlipayEcoEduKtParentApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayEcoEduKtParentApi.md#query) | **GET** /v3/alipay/eco/edu/kt/parent/query | 查询学生家长状态接口


## `query()`

```php
query($schoolPid, $schoolNo, $partnerId, $childName, $userMobile, $studentCode, $studentIdentify): \Alipay\OpenAPISDK\Model\AlipayEcoEduKtParentQueryResponseModel
```

查询学生家长状态接口

ISV发送账单后，用户在支付宝缴费成功。ISV可以通过此接口查询，用户缴费的时候，是否创建了缴费账户，如果已经添加，学校使用ISV的系统再次发账单就可以通过支付宝的通知触达用户；如果未添加，学校即可联系家长，督促家长在支付宝添加学生的缴费账户。  目前的出现的场景是家长第一次缴费成功后，学校使用ISV的系统再次发账单，认为家长应该收到通知，实际上只有建立缴费账户的家长才能收到，未建立缴费账户的是收不到通知，这部分家长有可能就缴费不及时或不通过支付宝缴费。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayEcoEduKtParentApi(
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

$schoolPid = 20880012939123234423; // string | 学校支付宝pid
$schoolNo = 11010100000002; // string | 学校编码，录入学校接口返回的school_no参数
$partnerId = 208800129391238873; // string | Isv的支付宝pid
$childName = 张晓晓; // string | 孩子或学生姓名
$userMobile = 13300000000; // string | 用户手机号，发账单时填写users数组中的一个手机号。结果返回用户是否通过此手机号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。
$studentCode = 2098453900091; // string | 学生的学号，一个学校的学号必须是唯一。结果返回用户是否通过此学号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。
$studentIdentify = 982343191010100909; // string | 学生的身份证号，使用身份证规则验证。结果返回用户是否通过此身份证号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。

try {
    $result = $apiInstance->query($schoolPid, $schoolNo, $partnerId, $childName, $userMobile, $studentCode, $studentIdentify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayEcoEduKtParentApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schoolPid** | **string**| 学校支付宝pid | [optional]
 **schoolNo** | **string**| 学校编码，录入学校接口返回的school_no参数 | [optional]
 **partnerId** | **string**| Isv的支付宝pid | [optional]
 **childName** | **string**| 孩子或学生姓名 | [optional]
 **userMobile** | **string**| 用户手机号，发账单时填写users数组中的一个手机号。结果返回用户是否通过此手机号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。 | [optional]
 **studentCode** | **string**| 学生的学号，一个学校的学号必须是唯一。结果返回用户是否通过此学号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。 | [optional]
 **studentIdentify** | **string**| 学生的身份证号，使用身份证规则验证。结果返回用户是否通过此身份证号添加此学生的缴费账户。user_mobile、student_code 、student_identify 必须并且只能填一项。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayEcoEduKtParentQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
