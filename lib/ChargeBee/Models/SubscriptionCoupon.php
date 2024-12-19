<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionCoupon extends Model
{
  protected $allowed = [
    'couponId',
    'applyTill',
    'appliedCount',
    'couponCode',
  ];

}

?>