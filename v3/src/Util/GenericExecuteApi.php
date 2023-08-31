<?php

namespace Alipay\OpenAPISDK\Util;

use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Configuration;
use Alipay\OpenAPISDK\HeaderSelector;
use Alipay\OpenAPISDK\ObjectSerializer;
use Alipay\OpenAPISDK\Util\Model\CustomizedParams;
use Alipay\OpenAPISDK\Util\Model\OpenApiGenericRequest;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

class GenericExecuteApi
{
    /**
     * @var AlipayConfigUtil
     */
    protected $alipayConfigUtil;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var bool
     */
    private $loadTest = false;

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     * @param Configuration $config
     */
    public function __construct(AlipayConfigUtil $alipayConfigUtil,
                                ClientInterface  $client = null,
                                Configuration    $config = null,
                                HeaderSelector   $selector = null)
    {
        if ($alipayConfigUtil == null) {
            throw new \InvalidArgumentException('$alipayConfigUtil is null');
        }
        $this->alipayConfigUtil = $alipayConfigUtil;
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @param string $path The sub-path of the HTTP URL
     * @param string $method The request method, one of "GET", "HEAD", "OPTIONS", "POST", "PUT", "PATCH" and "DELETE"
     * @param OpenApiGenericRequest $apiGenericRequest openApiGenericRequest
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function execute($path, $method, OpenApiGenericRequest $apiGenericRequest)
    {
        $request = $this->executeRequest($path, $method, $apiGenericRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            $returnType = 'object';

            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;

                default:
                    break;
            }
            throw $e;
        }
    }

    /**
     * @param $method
     * @param $httpMethod
     * @param $bizParams
     * @param null $authToken 用户授权凭证
     * @param null $appAuthToken 系统服务商的第三方应用代商家的应用或小程序模板调用支付宝OpenAPI时所传入的授权凭证
     * @param CustomizedParams|null $customizedParams 额外参数
     * @return string
     * @throws \Alipay\OpenAPISDK\ApiException
     */
    public function pageExecute($method, $httpMethod, $bizParams, $authToken = null, $appAuthToken = null, CustomizedParams $customizedParams = null)
    {
        $handleParams = $this->handleParams($method, $bizParams, $authToken, $appAuthToken, $customizedParams);
        $baseUrl = $this->baseUrl;
        if ($this->alipayConfigUtil->checkEmpty($baseUrl)) {
            $baseUrl = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl())
                ? $this->config->getHost() . "/gateway.do" : $this->alipayConfigUtil->getServerUrl() . "/gateway.do";
        }

        if ("GET" == strtoupper($httpMethod)) {
            //排序
            ksort($handleParams);
            $preString = http_build_query($handleParams);
            //拼接GET请求串
            return $baseUrl . "?" . $preString;
        } else {
            //拼接表单字符串
            return $this->buildRequestForm($handleParams, $baseUrl);
        }

    }

    /**
     * @param $method
     * @param $bizParams
     * @param null $authToken 用户授权凭证
     * @param null $appAuthToken 系统服务商的第三方应用代商家的应用或小程序模板调用支付宝OpenAPI时所传入的授权凭证
     * @param CustomizedParams|null $customizedParams 额外参数
     * @return string
     * @throws \Alipay\OpenAPISDK\ApiException
     */
    public function sdkExecute($method, $bizParams, $authToken = null, $appAuthToken = null, CustomizedParams $customizedParams = null)
    {
        $handleParams = $this->handleParams($method, $bizParams, $authToken, $appAuthToken, $customizedParams);
        //排序
        ksort($handleParams);
        return http_build_query($handleParams);
    }

    private function executeRequest($resourcePath, $method, OpenApiGenericRequest $request)
    {
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();

        if ($request->getBodyParams() == null) {
            $request->setBodyParams($request->getBizParams());
        }

        if (is_array($request->getFileParams()) && count($request->getFileParams()) >= 0) {
            $multipart = true;
        }
        // path params
        if (is_array($request->getPathParams()) && count($request->getPathParams()) >= 0) {
            foreach ($request->getPathParams() as $k => $v) {
                if (is_array($v)) {
                    $v = ObjectSerializer::serializeCollection($v, 'form');
                }
                $resourcePath = str_replace(
                    '{' . $k . '}',
                    ObjectSerializer::toPathValue($v),
                    $resourcePath
                );
            }
        }

        // query params
        if (is_array($request->getQueryParams()) && count($request->getQueryParams()) >= 0) {
            foreach ($request->getQueryParams() as $k => $v) {
                $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
            }
        }

        // 额外非全局header参数
        if (is_array($request->getHeaderParams()) && count($request->getHeaderParams()) >= 0) {
            foreach ($request->getHeaderParams() as $k => $v) {
                if (is_array($v)) {
                    $v = ObjectSerializer::serializeCollection($v, 'form');
                }
                $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
            }
        }
        if (!$this->alipayConfigUtil->checkEmpty($request->getAppAuthToken())) {
            $headerParams["alipay-app-auth-token"] = $request->getAppAuthToken();
        }

        if ($multipart) {
            if ($request->getBodyParams() != null) {
                $formParams['data'] = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request->getBodyParams()), JSON_UNESCAPED_UNICODE);
            }

            if (is_array($request->getFileParams()) && count($request->getFileParams()) >= 0) {
                foreach ($request->getFileParams() as $k => $v) {
                    $paramFiles = is_array($v) ? $v : [$v];
                    foreach ($paramFiles as $paramFile) {
                        $formParams[$k][] = \GuzzleHttp\Psr7\Utils::tryFopen(
                            ObjectSerializer::toFormValue($paramFile),
                            'rb'
                        );
                    }
                }
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        if (!$multipart && $request->getBodyParams() != null) {
            $signContent = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request->getBodyParams()), JSON_UNESCAPED_UNICODE);
            if ($headers['Content-Type'] === 'application/json' || $isEncrypt) {
                $signContent = $this->alipayConfigUtil->encrypt($signContent, $headers, $multipart);
                $httpBody = $signContent;
            } else {
                $httpBody = $request->getBodyParams();
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }

        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $method = strtoupper($method);
        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign($method, $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, $method, $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            $method,
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws \RuntimeException on file opening failure
     */
    private function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * @param $method
     * @param $bizParams
     * @param null $authToken
     * @param null $appAuthToken
     * @param CustomizedParams|null $customizedParams
     * @return array|mixed
     * @throws \Alipay\OpenAPISDK\ApiException
     */
    private function handleParams($method, $bizParams, $authToken = null, $appAuthToken = null, CustomizedParams $customizedParams = null)
    {
        $appParams = [];
        $systemParams = [];
        if ($customizedParams != null && !$this->alipayConfigUtil->checkEmpty($customizedParams->getBodyContent())) {
            $appParams['biz_content'] = $customizedParams->getBodyContent();
        } else if (is_array($bizParams) && array_key_exists('biz_content', $bizParams)) {
            $appParams['biz_content'] = json_encode(ObjectSerializer::sanitizeForSerialization($bizParams['biz_content']), JSON_UNESCAPED_UNICODE);
        }

        if (is_array($bizParams)) {
            foreach ($bizParams as $k => $v) {
                if ($k !== 'biz_content') {
                    $appParams[$k] = $v;
                }
            }
        }

        if ($customizedParams != null) {
            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $appParams['app_auth_token'] = $customizedParams->getAppAuthToken();
            }

            if (is_array($customizedParams->getQueryParams())) {
                $systemParams = $systemParams + $customizedParams->getQueryParams();
            }
        }

        if (!$this->alipayConfigUtil->checkEmpty($appAuthToken)) {
            $appParams['app_auth_token'] = $appAuthToken;
        }
        if (!$this->alipayConfigUtil->checkEmpty($authToken)) {
            $systemParams['auth_token'] = $authToken;
        }

        //系统参数
        $systemParams['method'] = $method;
        $systemParams['version'] = '1.0';
        $systemParams['alipay_sdk'] = $this->config->getSdkVersion();
        $systemParams['app_id'] = $this->alipayConfigUtil->getAppId();
        $systemParams['format'] = 'json';
        $systemParams['timestamp'] = date("Y-m-d H:i:s");
        $systemParams['charset'] = 'UTF-8';
        $systemParams['sign_type'] = 'RSA2';
        $systemParams['app_cert_sn'] = $this->alipayConfigUtil->getAppCertSN();
        $systemParams['alipay_root_cert_sn'] = $this->alipayConfigUtil->getRootCertSN();
        if ($this->alipayConfigUtil->isEncrypt()) {
            $systemParams['encrypt_type'] = $this->alipayConfigUtil->getEncryptType();
            $bizContent = array_key_exists('biz_content', $appParams) ? $appParams['biz_content'] : '';
            $headerParams = array();
            $appParams['biz_content'] = $this->alipayConfigUtil->encrypt($bizContent, $headerParams);
        }
        $totalParams = $appParams + $systemParams;

        if ($this->alipayConfigUtil->isNeedSign()) {
            $totalParams['sign'] = $this->alipayConfigUtil->generateSign($this->getSignContent($totalParams));
        }
        if ($this->loadTest) {
            $totalParams['app_id'] = $this->alipayConfigUtil->getAppId() . '_TEST_1A';
        }
        return $totalParams;
    }

    /**
     * 获取签名字符串
     *
     * @param $params
     * @return string
     */
    private function getSignContent($params)
    {
        ksort($params);
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === $this->alipayConfigUtil->checkEmpty($v) && "@" != substr($v, 0, 1)) {
                // 转换成目标字符集
                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }

    /**
     * 建立请求，以表单HTML形式构造（默认）
     * @param array 请求参数数组
     * @param string url
     * @return string 提交表单HTML文本
     */
    private function buildRequestForm($para_temp, $url)
    {

        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='" . $url . "?charset=" . 'UTF-8' . "' method='POST'>";
        while (list ($key, $val) = $this->fun_adm_each($para_temp)) {
            if (false === $this->alipayConfigUtil->checkEmpty($val)) {
                //$val = $this->characet($val, $this->postCharset);
                $val = str_replace("'", "&apos;", $val);
                //$val = str_replace("\"","&quot;",$val);
                $sHtml .= "<input type='hidden' name='" . $key . "' value='" . $val . "'/>";
            }
        }

        //submit按钮控件请不要含有name属性
        $sHtml = $sHtml . "<input type='submit' value='ok' style='display:none;'></form>";

        return $sHtml . "<script>document.forms['alipaysubmit'].submit();</script>";
    }

    private function fun_adm_each(&$array)
    {
        $res = array();
        $key = key($array);
        if ($key !== null) {
            next($array);
            $res[1] = $res['value'] = $array[$key];
            $res[0] = $res['key'] = $key;
        } else {
            $res = false;
        }
        return $res;
    }

    /**
     * @return AlipayConfigUtil
     */
    public function getAlipayConfigUtil(): AlipayConfigUtil
    {
        return $this->alipayConfigUtil;
    }

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function setAlipayConfigUtil(AlipayConfigUtil $alipayConfigUtil): void
    {
        $this->alipayConfigUtil = $alipayConfigUtil;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * @param Configuration $config
     */
    public function setConfig(Configuration $config): void
    {
        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return bool
     */
    public function isLoadTest(): bool
    {
        return $this->loadTest;
    }

    /**
     * @param bool $loadTest
     */
    public function setLoadTest(bool $loadTest): void
    {
        $this->loadTest = $loadTest;
    }

}