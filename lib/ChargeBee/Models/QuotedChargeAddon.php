<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedChargeAddon extends Model
{
  protected $allowed = [
    'id',
    'quantity',
    'unitPrice',
    'quantityInDecimal',
    'unitPriceInDecimal',
    'prorationType',
    'servicePeriod',
  ];

}

?>