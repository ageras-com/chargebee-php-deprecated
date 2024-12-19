<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CouponItemConstraint extends Model
{
  protected $allowed = [
    'itemType',
    'constraint',
    'itemPriceIds',
  ];

}

?>