<?php

namespace ChargeBeeDeprecated\ChargeBee\Exceptions;

use ChargeBeeDeprecated\ChargeBee\Exceptions\APIError;

use Exception;

class IOException extends Exception {

    private $errorNo;

    public function __construct($message, $errorNo) {
        parent::__construct($message);

        $this->errorNo = $errorNo;
    }

    public function getErrorCode() {
        return $this->errorNo;
    }
}
