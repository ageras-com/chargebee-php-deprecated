<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourceCustVoucherSource extends Model
{
  protected $allowed = [
    'last4',
    'firstName',
    'lastName',
    'email',
  ];

}

?>