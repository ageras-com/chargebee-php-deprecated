<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class GatewayErrorDetail extends Model
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



  # OPERATIONS
  #-----------

 }

?>