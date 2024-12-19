<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionBillingOverride extends Model
{
  protected $allowed = [
    'maxExcessPaymentUsage',
    'maxRefundableCreditsUsage',
  ];

}

?>