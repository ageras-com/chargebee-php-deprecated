<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedSubscriptionEventBasedAddon extends Model
{
  protected $allowed = [
    'id',
    'quantity',
    'unitPrice',
    'servicePeriodInDays',
    'onEvent',
    'chargeOnce',
    'quantityInDecimal',
    'unitPriceInDecimal',
  ];

}

?>