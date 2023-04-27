# Alipay\OpenAPISDK\AlipayDataBillEreceiptApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apply()**](AlipayDataBillEreceiptApi.md#apply) | **POST** /v3/alipay/data/bill/ereceipt/apply | 申请电子回单(incubating)
[**query()**](AlipayDataBillEreceiptApi.md#query) | **GET** /v3/alipay/data/bill/ereceipt/query | 查询电子回单状态(incubating)


## `apply()`

```php
apply($alipayDataBillEreceiptApplyModel): \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptApplyResponseModel
```

申请电子回单(incubating)

支持商家下载多种类型支付宝资金凭证。包括：余额收支证明、余额收支流水证明、转入转出收支证明、收支汇总证明（日汇总）以及收支汇总证明（月汇总）。  账单凭证申请分两个步骤：  1、使用alipay.data.bill.ereceipt.apply创建申请，并获取file_id信息。  2、使用file_id查询alipay.data.bill.ereceipt.query获取回单信息，回单生成完毕将会返回对应的下载链接，下载链接时效为30秒，过期将无法下载，需重新调用alipay.data.bill.ereceipt.query获取新的下载链接。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillEreceiptApi(
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

$alipayDataBillEreceiptApplyModel = new \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptApplyModel(); // \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptApplyModel

try {
    $result = $apiInstance->apply($alipayDataBillEreceiptApplyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillEreceiptApi->apply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayDataBillEreceiptApplyModel** | **\Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptApplyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptApplyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($fileId): \Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptQueryResponseModel
```

查询电子回单状态(incubating)

电子签章申请分两个步骤：  1、使用alipay.data.bill.ereceipt.apply创建申请，并获取file_id信息。 2、等待一段时间后，使用file_id查询alipay.data.bill.ereceipt.query申请信息。  单个申请建议每5分钟查询一次状态。批量回单建议20分钟查询一次。汇总回单建议30分钟查询一次

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayDataBillEreceiptApi(
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

$fileId = 12345; // string | 根据申请id查询状态。通过 <a href=\"https://opendocs.alipay.com/apis/api_15/alipay.data.bill.ereceipt.apply\">alipay.data.bill.ereceipt.apply(申请电子回单(incubating))</a> 接口同步响应获取。

try {
    $result = $apiInstance->query($fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayDataBillEreceiptApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileId** | **string**| 根据申请id查询状态。通过 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_15/alipay.data.bill.ereceipt.apply\&quot;&gt;alipay.data.bill.ereceipt.apply(申请电子回单(incubating))&lt;/a&gt; 接口同步响应获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayDataBillEreceiptQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
