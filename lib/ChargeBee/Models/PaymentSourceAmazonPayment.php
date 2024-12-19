<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourceAmazonPayment extends Model
{
  protected $allowed = [
    'email',
    'agreementId',
  ];

}

?>