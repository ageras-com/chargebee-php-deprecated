<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourceMandate extends Model
{
  protected $allowed = [
    'id',
    'subscriptionId',
    'createdAt',
  ];

}

?>