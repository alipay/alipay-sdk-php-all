# Alipay\OpenAPISDK\AlipayOpenInstantdeliveryMerchantagreementApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenInstantdeliveryMerchantagreementApi.md#query) | **GET** /v3/alipay/open/instantdelivery/merchantagreement/query | 协议签署查询api
[**sign()**](AlipayOpenInstantdeliveryMerchantagreementApi.md#sign) | **POST** /v3/alipay/open/instantdelivery/merchantagreement/sign | 即时配送中商家代扣协议签署


## `query()`

```php
query(): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementQueryResponseModel
```

协议签署查询api

协议签署查询api, 提供isv查询商户物流代扣协议签署情况

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantagreementApi(
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


try {
    $result = $apiInstance->query();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantagreementApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `sign()`

```php
sign($alipayOpenInstantdeliveryMerchantagreementSignModel): \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementSignResponseModel
```

即时配送中商家代扣协议签署

即时配送中商家代扣协议签署

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenInstantdeliveryMerchantagreementApi(
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

$alipayOpenInstantdeliveryMerchantagreementSignModel = new \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementSignModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementSignModel

try {
    $result = $apiInstance->sign($alipayOpenInstantdeliveryMerchantagreementSignModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenInstantdeliveryMerchantagreementApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenInstantdeliveryMerchantagreementSignModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementSignModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenInstantdeliveryMerchantagreementSignResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
