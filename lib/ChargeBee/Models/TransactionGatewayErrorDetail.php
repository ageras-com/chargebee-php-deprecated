<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class TransactionGatewayErrorDetail extends Model
{
  protected $allowed = [
    'requestId',
    'errorCategory',
    'errorCode',
    'errorMessage',
    'declineCode',
    'declineMessage',
    'networkErrorCode',
    'networkErrorMessage',
    'errorField',
    'recommendationCode',
    'recommendationMessage',
    'processorErrorCode',
    'processorErrorMessage',
    'errorCauseId',
  ];

}

?>