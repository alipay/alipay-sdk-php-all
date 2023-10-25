# Alipay\OpenAPISDK\AlipayMarketingCardBenefitApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayMarketingCardBenefitApi.md#create) | **POST** /v3/alipay/marketing/card/benefit/create | 会员卡模板外部权益创建
[**delete()**](AlipayMarketingCardBenefitApi.md#delete) | **DELETE** /v3/alipay/marketing/card/benefit/delete | 会员卡模板外部权益删除
[**modify()**](AlipayMarketingCardBenefitApi.md#modify) | **POST** /v3/alipay/marketing/card/benefit/modify | 会员卡模板外部权益修改
[**query()**](AlipayMarketingCardBenefitApi.md#query) | **GET** /v3/alipay/marketing/card/benefit/query | 会员卡模板外部权益查询


## `create()`

```php
create($alipayMarketingCardBenefitCreateModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitCreateResponseModel
```

会员卡模板外部权益创建

会员卡模板外部权益创建，创建的权益内容信息将展示在卡包中卡详情页中部区域。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardBenefitApi(
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

$alipayMarketingCardBenefitCreateModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitCreateModel

try {
    $result = $apiInstance->create($alipayMarketingCardBenefitCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardBenefitApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardBenefitCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($templateId, $benefitId): \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitDeleteResponseModel
```

会员卡模板外部权益删除

会员卡模板外部权益删除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardBenefitApi(
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

$templateId = 20170322000000000068101000300041; // string | 会员卡模板ID，通过 <a  href=\"https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.template.create\">alipay.marketing.card.template.create</a>（会员卡模板创建)接口创建会员卡模板获取。
$benefitId = 20170322000000000068101000300041; // string | 权益ID，通过 <a  href=\"https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.benefit.create\">alipay.marketing.card.benefit.create</a>(会员卡模板外部权益创建)接口创建获取。

try {
    $result = $apiInstance->delete($templateId, $benefitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardBenefitApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 会员卡模板ID，通过 &lt;a  href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.template.create\&quot;&gt;alipay.marketing.card.template.create&lt;/a&gt;（会员卡模板创建)接口创建会员卡模板获取。 | [optional]
 **benefitId** | **string**| 权益ID，通过 &lt;a  href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.benefit.create\&quot;&gt;alipay.marketing.card.benefit.create&lt;/a&gt;(会员卡模板外部权益创建)接口创建获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitDeleteResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `modify()`

```php
modify($alipayMarketingCardBenefitModifyModel): \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitModifyResponseModel
```

会员卡模板外部权益修改

会员卡模板外部权益修改

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardBenefitApi(
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

$alipayMarketingCardBenefitModifyModel = new \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitModifyModel(); // \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitModifyModel

try {
    $result = $apiInstance->modify($alipayMarketingCardBenefitModifyModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardBenefitApi->modify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayMarketingCardBenefitModifyModel** | **\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitModifyModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitModifyResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `query()`

```php
query($templateId, $benefitId): \Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitQueryResponseModel
```

会员卡模板外部权益查询

会员卡模板外部权益查询

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayMarketingCardBenefitApi(
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

$templateId = 20170322000000000068101000300041; // string | 会员卡模板ID，通过 <a  href=\"https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.template.create\">alipay.marketing.card.template.create</a>（会员卡模板创建)接口创建会员卡模板获取。
$benefitId = 20170322000000000068101000300041; // string | 权益ID，通过 <a  href=\"https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.benefit.create\">alipay.marketing.card.benefit.create</a>(会员卡模板外部权益创建)接口创建获取。

try {
    $result = $apiInstance->query($templateId, $benefitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayMarketingCardBenefitApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templateId** | **string**| 会员卡模板ID，通过 &lt;a  href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.template.create\&quot;&gt;alipay.marketing.card.template.create&lt;/a&gt;（会员卡模板创建)接口创建会员卡模板获取。 | [optional]
 **benefitId** | **string**| 权益ID，通过 &lt;a  href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_5/alipay.marketing.card.benefit.create\&quot;&gt;alipay.marketing.card.benefit.create&lt;/a&gt;(会员卡模板外部权益创建)接口创建获取。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayMarketingCardBenefitQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
