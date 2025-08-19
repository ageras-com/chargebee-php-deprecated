<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionSubscriptionItem extends Model
{
  protected $allowed = [
    'itemPriceId',
    'itemType',
    'quantity',
    'quantityInDecimal',
    'meteredQuantity',
    'lastCalculatedAt',
    'unitPrice',
    'unitPriceInDecimal',
    'amount',
    'currentTermStart',
    'currentTermEnd',
    'nextBillingAt',
    'amountInDecimal',
    'billingPeriod',
    'billingPeriodUnit',
    'freeQuantity',
    'freeQuantityInDecimal',
    'trialEnd',
    'billingCycles',
    'servicePeriodDays',
    'chargeOnEvent',
    'chargeOnce',
    'chargeOnOption',
    'prorationType',
    'usageAccumulationResetFrequency',
  ];

}

?>