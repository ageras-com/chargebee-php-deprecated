<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PlanEventBasedAddon extends Model
{
  protected $allowed = [
    'id',
    'quantity',
    'onEvent',
    'chargeOnce',
    'quantityInDecimal',
  ];

}

?>