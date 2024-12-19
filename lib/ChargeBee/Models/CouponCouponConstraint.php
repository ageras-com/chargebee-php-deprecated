<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CouponCouponConstraint extends Model
{
  protected $allowed = [
    'entityType',
    'type',
    'value',
  ];

}

?>