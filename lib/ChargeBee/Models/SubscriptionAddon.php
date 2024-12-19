<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionAddon extends Model
{
  protected $allowed = [
    'id',
    'quantity',
    'unitPrice',
    'amount',
    'trialEnd',
    'remainingBillingCycles',
    'quantityInDecimal',
    'unitPriceInDecimal',
    'amountInDecimal',
    'prorationType',
  ];

}

?>