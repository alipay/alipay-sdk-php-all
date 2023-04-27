# Alipay\OpenAPISDK\AnttechOceanbaseTestplatformTaskApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AnttechOceanbaseTestplatformTaskApi.md#query) | **POST** /v3/anttech/oceanbase/testplatform/task/query | 获取ob开源官网提测平台待执行任务接口


## `query()`

```php
query($anttechOceanbaseTestplatformTaskQueryModel): \Alipay\OpenAPISDK\Model\AnttechOceanbaseTestplatformTaskQueryResponseModel
```

获取ob开源官网提测平台待执行任务接口

获取ob开源官网提测平台待执行任务接口，用于测试任务

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AnttechOceanbaseTestplatformTaskApi(
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

$anttechOceanbaseTestplatformTaskQueryModel = new \Alipay\OpenAPISDK\Model\AnttechOceanbaseTestplatformTaskQueryModel(); // \Alipay\OpenAPISDK\Model\AnttechOceanbaseTestplatformTaskQueryModel

try {
    $result = $apiInstance->query($anttechOceanbaseTestplatformTaskQueryModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnttechOceanbaseTestplatformTaskApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anttechOceanbaseTestplatformTaskQueryModel** | **\Alipay\OpenAPISDK\Model\AnttechOceanbaseTestplatformTaskQueryModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AnttechOceanbaseTestplatformTaskQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
