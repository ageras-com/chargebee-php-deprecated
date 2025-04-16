<?php

namespace Chargebee\Exceptions;

use Exception;

class APIError extends Exception
{
    private $httpStatusCode;
    private $jsonObject;
    private $type;
    private $apiErrorCode;
    private $param;
    private $headers;
    private $errorCauseId;
    public function __construct($httpStatusCode, $jsonObject, $responseHeaders)
    {
        parent::__construct($jsonObject['message']);

        $this->jsonObject = $jsonObject;
        $this->type = isset($jsonObject['type']) ? $jsonObject['type'] : null;
        $this->apiErrorCode = $jsonObject['api_error_code'];
        $this->param = isset($jsonObject['param']) ? $jsonObject['param'] : null;
        $this->errorCauseId = isset($jsonObject['error_cause_id']) ? $jsonObject['error_cause_id'] : null;
        $this->httpStatusCode = $httpStatusCode;
        $this->headers = $responseHeaders;
    }

    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getApiErrorCode()
    {
        return $this->apiErrorCode;
    }

    public function getParam()
    {
        return $this->param;
    }

    /**
     * This function has been deprecated. Use getHttpStatusCode.
     * @deprecated
     */
    public function getHttpCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * This function has been deprecated. There IO errors are now thrown as
     * IOException.
     * @deprecated
     */
    public function getErrorNo()
    {
        return 0;
    }

    public function getJsonObject()
    {
        return $this->jsonObject;
    }
    public function getHeaders()
    {
        return $this->headers;
    }
    public function getErrorCauseId(){
        return $this->errorCauseId;
    }
}
