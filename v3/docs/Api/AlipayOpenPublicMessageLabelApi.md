# Alipay\OpenAPISDK\AlipayOpenPublicMessageLabelApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**send()**](AlipayOpenPublicMessageLabelApi.md#send) | **POST** /v3/alipay/open/public/message/label/send | 根据标签组发消息接口


## `send()`

```php
send($alipayOpenPublicMessageLabelSendModel): object
```

根据标签组发消息接口

开发者可以通过标签运算圈定一批用户，并且向这批用户推送消息。关于标签组发有以下注意点：  除了商户自定义标签，还支持支付宝用户标签，我们将陆续开放用户画像标签，目前支持的支付宝标签及说明请查看支付宝开放标签；  用户及标签数据有1天的缓存时间，即昨天开发者给M用户打了a标签，今天给有a标签的用户组发消息，M能够收到消息；但是如果开发者今天给M用户打了a标签，然后向有a标签的用户组发消息，M不能收到消息；  与群发消息接口类似，该接口调用之后，消息发送系统会处理一段时间，调用接口到发送成功存在一定的时延，几分钟到半个小时不等；  对于同一个用户而言，一周只能收到一条群发或者标签组发的消息；  消息组发接口一周最多调用5次。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenPublicMessageLabelApi(
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

$alipayOpenPublicMessageLabelSendModel = new \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageLabelSendModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageLabelSendModel

try {
    $result = $apiInstance->send($alipayOpenPublicMessageLabelSendModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenPublicMessageLabelApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alipayOpenPublicMessageLabelSendModel** | **\Alipay\OpenAPISDK\Model\AlipayOpenPublicMessageLabelSendModel**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
