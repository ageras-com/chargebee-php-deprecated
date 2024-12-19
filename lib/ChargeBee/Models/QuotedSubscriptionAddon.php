<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedSubscriptionAddon extends Model
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