<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerPaymentMethod extends Model
{
  protected $allowed = [
    'type',
    'gateway',
    'gatewayAccountId',
    'status',
    'referenceId',
  ];

}

?>