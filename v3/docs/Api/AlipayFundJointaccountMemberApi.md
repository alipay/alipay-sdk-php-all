# Alipay\OpenAPISDK\AlipayFundJointaccountMemberApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchquery()**](AlipayFundJointaccountMemberApi.md#batchquery) | **POST** /v3/alipay/fund/jointaccount/member/batchquery | 企业批量查询员工信息（分页）
[**bind()**](AlipayFundJointaccountMemberApi.md#bind) | **POST** /v3/alipay/fund/jointaccount/member/bind | 因公付邀请员工
[**consult()**](AlipayFundJointaccountMemberApi.md#consult) | **POST** /v3/alipay/fund/jointaccount/member/consult | 员企关系咨询
[**query()**](AlipayFundJointaccountMemberApi.md#query) | **GET** /v3/alipay/fund/jointaccount/member/query | 企业查询员工列表
[**unbind()**](AlipayFundJointaccountMemberApi.md#unbind) | **POST** /v3/alipay/fund/jointaccount/member/unbind | 企业删除员工


## `batchquery()`

```php
batchquery($alipayFundJointaccountMemberBatchqueryModel): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBatchqueryResponseModel
```

企业批量查询员工信息（分页）

企业查询员工列表，支持分页，支持按登录号精确查询，支持按会员号精确查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberApi(
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

$alipayFundJointaccountMemberBatchqueryModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBatchqueryModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBatchqueryModel

try {
    $result = $apiInstance->batchquery($alipayFundJointaccountMemberBatchqueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberApi->batchquery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountMemberBatchqueryModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBatchqueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBatchqueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `bind()`

```php
bind($alipayFundJointaccountMemberBindModel): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBindResponseModel
```

因公付邀请员工

因公付邀请员工

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberApi(
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

$alipayFundJointaccountMemberBindModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBindModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBindModel

try {
    $result = $apiInstance->bind($alipayFundJointaccountMemberBindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberApi->bind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountMemberBindModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBindModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberBindResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `consult()`

```php
consult($alipayFundJointaccountMemberConsultModel): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberConsultResponseModel
```

员企关系咨询

返回输入的员工列表是否在指定企业组织中

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberApi(
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

$alipayFundJointaccountMemberConsultModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberConsultModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberConsultModel

try {
    $result = $apiInstance->consult($alipayFundJointaccountMemberConsultModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberApi->consult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountMemberConsultModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberConsultModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberConsultResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($productCode, $bizScene, $accountId, $pageNum, $pageSize, $userId, $openId, $agreementNo): \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberQueryResponseModel
```

企业查询员工列表

企业查询员工列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberApi(
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

$productCode = ENTERPRISE_PAY; // string | 产品码
$bizScene = DEFAULT; // string | 业务场景
$accountId = 2088900976746215; // string | 账户ID
$pageNum = 1; // string | 采用分页查询，本参数为空或0默认显示第一页。如果输入的值大于总页数，则支付宝返回最后一页数据。
$pageSize = 1; // string | 每页大小，不传的情况下默认20条，超过20条默认按20条查询；不足20条则按实际记录数返回
$userId = 2088900976746215; // string | 员工id
$openId = 074a1CcTG1LelxKe4xQC0zgNdId0nxi95b5lsNpazWYoCo5; // string | 员工的openId
$agreementNo = 20889009767462151111111; // string | 授权协议号

try {
    $result = $apiInstance->query($productCode, $bizScene, $accountId, $pageNum, $pageSize, $userId, $openId, $agreementNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| 产品码 | [optional]
 **bizScene** | **string**| 业务场景 | [optional]
 **accountId** | **string**| 账户ID | [optional]
 **pageNum** | **string**| 采用分页查询，本参数为空或0默认显示第一页。如果输入的值大于总页数，则支付宝返回最后一页数据。 | [optional]
 **pageSize** | **string**| 每页大小，不传的情况下默认20条，超过20条默认按20条查询；不足20条则按实际记录数返回 | [optional]
 **userId** | **string**| 员工id | [optional]
 **openId** | **string**| 员工的openId | [optional]
 **agreementNo** | **string**| 授权协议号 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `unbind()`

```php
unbind($alipayFundJointaccountMemberUnbindModel): object
```

企业删除员工

企业删除员工

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayFundJointaccountMemberApi(
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

$alipayFundJointaccountMemberUnbindModel = new \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberUnbindModel(); // \Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberUnbindModel

try {
    $result = $apiInstance->unbind($alipayFundJointaccountMemberUnbindModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayFundJointaccountMemberApi->unbind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayFundJointaccountMemberUnbindModel** | **\Alipay\OpenAPISDK\Model\AlipayFundJointaccountMemberUnbindModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
