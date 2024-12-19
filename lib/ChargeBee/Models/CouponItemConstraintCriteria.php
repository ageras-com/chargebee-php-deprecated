<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CouponItemConstraintCriteria extends Model
{
  protected $allowed = [
    'itemType',
    'currencies',
    'itemFamilyIds',
    'itemPricePeriods',
  ];

}

?>