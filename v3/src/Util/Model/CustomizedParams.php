<?php

namespace Alipay\OpenAPISDK\Util\Model;

class CustomizedParams
{
    /**
     * 系统服务商的第三方应用代商家的应用或小程序模板调用支付宝OpenAPI时所传入的授权凭证
     */
    private $appAuthToken;

    /**
     * 额外的header参数
     */
    private $headerParams;

    /**
     * 额外的query参数
     */
    private $queryParams;

    /**
     * body字符串，若bodyContent有值，则请求的body内容为bodyContent
     */
    private $bodyContent;

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
    public function getBodyContent()
    {
        return $this->bodyContent;
    }

    /**
     * @param mixed $bodyContent
     */
    public function setBodyContent($bodyContent): void
    {
        $this->bodyContent = $bodyContent;
    }
}