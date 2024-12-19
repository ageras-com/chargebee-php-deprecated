<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerBalance extends Model
{
  protected $allowed = [
    'promotionalCredits',
    'excessPayments',
    'refundableCredits',
    'unbilledCharges',
    'currencyCode',
    'balanceCurrencyCode',
  ];

}

?>