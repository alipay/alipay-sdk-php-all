<?php

namespace Alipay\OpenAPISDK\Util\Model;

class OpenApiGenericRequest
{
    /**
     * 系统服务商的第三方应用代商家的应用或小程序模板调用支付宝OpenAPI时所传入的授权凭证
     */
    private $appAuthToken;

    /**
     * path参数
     */
    private $pathParams;

    /**
     * query参数
     */
    private $queryParams;

    /**
     * body参数
     */
    private $bodyParams;

    /**
     * 业务参数（废弃，请使用$bodyParams）
     */
    private $bizParams;

    /**
     * 文件参数（fileParams不为空则表示文件上传）
     */
    private $fileParams;

    /**
     * 额外的header参数
     */
    private $headerParams;

    /**
     * @return mixed
     */
    public function getAppAuthToken()
    {
        return $this->appAuthToken;
    }

    /**
     * @param mixed $appAuthToken
     */
    public function setAppAuthToken($appAuthToken): void
    {
        $this->appAuthToken = $appAuthToken;
    }

    /**
     * @return mixed
     */
    public function getPathParams()
    {
        return $this->pathParams;
    }

    /**
     * @param mixed $pathParams
     */
    public function setPathParams($pathParams): void
    {
        $this->pathParams = $pathParams;
    }

    /**
     * @return mixed
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param mixed $queryParams
     */
    public function setQueryParams($queryParams): void
    {
        $this->queryParams = $queryParams;
    }

    /**
     * @return mixed
     */
    public function getBodyParams()
    {
        return $this->bodyParams;
    }

    /**
     * @param mixed $bodyParams
     */
    public function setBodyParams($bodyParams): void
    {
        $this->bodyParams = $bodyParams;
    }

    /**
     * @return mixed
     */
    public function getBizParams()
    {
        return $this->bizParams;
    }

    /**
     * @param mixed $bizParams
     */
    public function setBizParams($bizParams): void
    {
        $this->bizParams = $bizParams;
    }

    /**
     * @return mixed
     */
    public function getFileParams()
    {
        return $this->fileParams;
    }

    /**
     * @param mixed $fileParams
     */
    public function setFileParams($fileParams): void
    {
        $this->fileParams = $fileParams;
    }

    /**
     * @return mixed
     */
    public function getHeaderParams()
    {
        return $this->headerParams;
    }

    /**
     * @param mixed $headerParams
     */
    public function setHeaderParams($headerParams): void
    {
        $this->headerParams = $headerParams;
    }
}