<?php

namespace Alipay\OpenAPISDK\Util;

class AlipayLogger
{
    private static $needEnableLogger = true;

    public static function logBizError($errorMessage)
    {
        if (!self::$needEnableLogger) {
            return;
        }
        $logData = date("Y-m-d H:i:s") . '^_^'
            . 'PHP_OS:' . PHP_OS . '^_^'
            . 'PHP_VERSION:' . PHP_VERSION . '^_^'
            . 'errorMessage:' . $errorMessage;
        echo '[ERROR] ' . $logData, PHP_EOL;
    }

    public static function logBizInfo($url, $body, $method, $contentType, $requestId)
    {
        if (!self::$needEnableLogger) {
            return;
        }
        $logData = date("Y-m-d H:i:s") . '^_^'
            . 'PHP_OS:' . PHP_OS . '^_^'
            . 'PHP_VERSION:' . PHP_VERSION . '^_^'
            . 'url:' . $url . '^_^'
            . 'method:' . $method . '^_^'
            . 'requestId:' . $requestId . '^_^'
            . 'contentType:' . $contentType . '^_^'
            . ($contentType === 'multipart/form-data' ? 'body[data]:' : 'body:') . $body;
        echo '[INFO] ' . $logData, PHP_EOL;
    }

    public static function logBizResponseInfo($code, $responseBody, $responseHeaders)
    {
        if (!self::$needEnableLogger) {
            return;
        }
        $logData = date("Y-m-d H:i:s") . '^_^'
            . 'PHP_OS:' . PHP_OS . '^_^'
            . 'PHP_VERSION:' . PHP_VERSION . '^_^'
            . 'HTTP response code:' . $code . '^_^'
            . 'HTTP response body:' . (isset($responseBody) && !is_string($responseBody) ? json_encode($responseBody) : $responseBody) . '^_^'
            . 'HTTP response headers:' . (isset($responseHeaders) && !is_string($responseHeaders) ? json_encode($responseHeaders) : $responseHeaders);
        echo '[INFO] ' . $logData, PHP_EOL;
    }

    /**
     * @param bool $needEnableLogger
     */
    public static function setNeedEnableLogger(bool $needEnableLogger): void
    {
        self::$needEnableLogger = $needEnableLogger;
    }


}