<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourcePaypal extends Model
{
  protected $allowed = [
    'email',
    'agreementId',
  ];

}

?>