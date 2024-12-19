<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedChargeCharge extends Model
{
  protected $allowed = [
    'amount',
    'amountInDecimal',
    'description',
    'servicePeriodInDays',
    'avalaraSaleType',
    'avalaraTransactionType',
    'avalaraServiceType',
  ];

}

?>