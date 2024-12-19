<?php

namespace ChargeBeeDeprecated\ChargeBee\Exceptions;

use ChargeBeeDeprecated\ChargeBee\Exceptions\APIError;

class PaymentException extends APIError
{
    public function __construct($httpStatusCode, $jsonObject, $responseHeaders)
    {
        parent::__construct($httpStatusCode, $jsonObject, $responseHeaders);
    }
}
