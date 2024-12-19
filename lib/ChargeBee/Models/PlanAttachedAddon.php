<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PlanAttachedAddon extends Model
{
  protected $allowed = [
    'id',
    'quantity',
    'billingCycles',
    'type',
    'quantityInDecimal',
  ];

}

?>