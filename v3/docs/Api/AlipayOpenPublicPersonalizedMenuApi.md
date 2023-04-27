# Alipay\OpenAPISDK\AlipayOpenPublicPersonalizedMenuApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**create()**](AlipayOpenPublicPersonalizedMenuApi.md#create) | **POST** /v3/alipay/open/public/personalized/menu/create | 个性化菜单创建
[**delete()**](AlipayOpenPublicPersonalizedMenuApi.md#delete) | **DELETE** /v3/alipay/open/public/personalized/menu/delete | 个性化菜单删除


## `create()`

```php
create($alipayOpenPublicPersonalizedMenuCreateModel): \Alipay\OpenAPISDK\Model\AlipayOpenPublicPersonalizedMenuCreateResponseModel
```

个性化菜单创建

开发者可使用该接口创建个性化菜单，当生活号用户标签信息命中该菜单的标签规则时，用户将会看到该套菜单。个性化菜单创建完成后立即生效，用户支付宝客户端版本低于10.0.12时，若创建的是icon菜单，也会以文本菜单的形式展示。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicPersonalizedMenuApi(
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

$alipayOpenPublicPersonalizedMenuCreateModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicPersonalizedMenuCreateModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicPersonalizedMenuCreateModel

try {
    $result = $apiInstance->create($alipayOpenPublicPersonalizedMenuCreateModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicPersonalizedMenuApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicPersonalizedMenuCreateModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicPersonalizedMenuCreateModel**|  | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenPublicPersonalizedMenuCreateResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($menuKey): object
```

个性化菜单删除

开发者可使用该接口删除个性化菜单

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicPersonalizedMenuApi(
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

$menuKey = 100000; // string | 要删除的个性化菜单key。通过 <a href=\"https://opendocs.alipay.com/apis/api_6/alipay.open.public.personalized.menu.create\">alipay.open.public.personalized.menu.create</a>(个性化菜单创建)接口创建个性化菜单后获取。

try {
    $result = $apiInstance->delete($menuKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicPersonalizedMenuApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **menuKey** | **string**| 要删除的个性化菜单key。通过 &lt;a href&#x3D;\&quot;https://opendocs.alipay.com/apis/api_6/alipay.open.public.personalized.menu.create\&quot;&gt;alipay.open.public.personalized.menu.create&lt;/a&gt;(个性化菜单创建)接口创建个性化菜单后获取。 | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
