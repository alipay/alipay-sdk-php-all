# Alipay\OpenAPISDK\AntMerchantExpandShopPageApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AntMerchantExpandShopPageApi.md#query) | **GET** /v3/ant/merchant/shop/pagequery | 店铺分页查询接口


## `query()`

```php
query($ipRoleId, $pageNum, $pageSize, $addressVersion, $provinceCode, $cityCode, $districtCode): \Alipay\OpenAPISDK\Model\AntMerchantExpandShopPageQueryResponseModel
```

店铺分页查询接口

用于服务商或商户查询其自己的店铺信息

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AntMerchantExpandShopPageApi(
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

$ipRoleId = 2088301155943087; // string | 商户角色id，表示将要开的店属于哪个商户角色。对于直连开店场景，填写商户pid；对于间连开店场景（线上、线下、直付通），填写商户smid。特别说明：IoT设备三绑定场景统一填写商户pid
$pageNum = 1; // int | 查询页数
$pageSize = 10; // int | 每页查询大小，限制100以内
$addressVersion = 2022Q2; // string | 行政区划版本，当前可传空值(取默认版本)、2022Q2、UPTODATE(取最新版本)，其中空值默认为：2020Q1版本(address_version=''或null)，想要查看版本是2022年2季度版本则传入:(address_version='2022Q2')，想要获取最新版本则传入:(address_version ='UPTODATE')
$provinceCode = 370000; // string | 省份编码。 蚂蚁店铺请按照<a href=\"https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\" target=\"_blank\">蚂蚁店铺地区码</a> 表格中填写。 直付通商户请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \" target=\"_blank\">直付通商户地区码</a> 表格中内容填写。
$cityCode = 371000; // string | 城市编码。 蚂蚁店铺请按照<a href=\"https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\" target=\"_blank\">蚂蚁店铺地区码</a> 表格中填写。 直付通商户请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \" target=\"_blank\">直付通商户地区码</a> 表格中内容填写。
$districtCode = 371002; // string | 区县编码。 蚂蚁店铺请按照<a href=\"https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\" target=\"_blank\">蚂蚁店铺地区码</a> 表格中填写。 直付通商户请按照<a href=\"https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \" target=\"_blank\">直付通商户地区码</a> 表格中内容填写。

try {
    $result = $apiInstance->query($ipRoleId, $pageNum, $pageSize, $addressVersion, $provinceCode, $cityCode, $districtCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AntMerchantExpandShopPageApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipRoleId** | **string**| 商户角色id，表示将要开的店属于哪个商户角色。对于直连开店场景，填写商户pid；对于间连开店场景（线上、线下、直付通），填写商户smid。特别说明：IoT设备三绑定场景统一填写商户pid | [optional]
 **pageNum** | **int**| 查询页数 | [optional]
 **pageSize** | **int**| 每页查询大小，限制100以内 | [optional]
 **addressVersion** | **string**| 行政区划版本，当前可传空值(取默认版本)、2022Q2、UPTODATE(取最新版本)，其中空值默认为：2020Q1版本(address_version&#x3D;&#39;&#39;或null)，想要查看版本是2022年2季度版本则传入:(address_version&#x3D;&#39;2022Q2&#39;)，想要获取最新版本则传入:(address_version &#x3D;&#39;UPTODATE&#39;) | [optional]
 **provinceCode** | **string**| 省份编码。 蚂蚁店铺请按照&lt;a href&#x3D;\&quot;https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\&quot; target&#x3D;\&quot;_blank\&quot;&gt;蚂蚁店铺地区码&lt;/a&gt; 表格中填写。 直付通商户请按照&lt;a href&#x3D;\&quot;https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \&quot; target&#x3D;\&quot;_blank\&quot;&gt;直付通商户地区码&lt;/a&gt; 表格中内容填写。 | [optional]
 **cityCode** | **string**| 城市编码。 蚂蚁店铺请按照&lt;a href&#x3D;\&quot;https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\&quot; target&#x3D;\&quot;_blank\&quot;&gt;蚂蚁店铺地区码&lt;/a&gt; 表格中填写。 直付通商户请按照&lt;a href&#x3D;\&quot;https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \&quot; target&#x3D;\&quot;_blank\&quot;&gt;直付通商户地区码&lt;/a&gt; 表格中内容填写。 | [optional]
 **districtCode** | **string**| 区县编码。 蚂蚁店铺请按照&lt;a href&#x3D;\&quot;https://mdn.alipayobjects.com/huamei_sm7gq8/afts/file/A*blT9RqSR9_gAAAAAAAAAAAAADuKQAQ/2022%E8%9A%82%E8%9A%81%E9%87%91%E6%9C%8D%E5%9C%B0%E5%8C%BA%E7%A0%81.xlsx\&quot; target&#x3D;\&quot;_blank\&quot;&gt;蚂蚁店铺地区码&lt;/a&gt; 表格中填写。 直付通商户请按照&lt;a href&#x3D;\&quot;https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx \&quot; target&#x3D;\&quot;_blank\&quot;&gt;直付通商户地区码&lt;/a&gt; 表格中内容填写。 | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AntMerchantExpandShopPageQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
