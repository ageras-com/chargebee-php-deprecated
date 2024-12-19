<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class RampItemsToUpdate extends Model
{
  protected $allowed = [
    'itemPriceId',
    'itemType',
    'quantity',
    'quantityInDecimal',
    'unitPrice',
    'unitPriceInDecimal',
    'amount',
    'amountInDecimal',
    'freeQuantity',
    'freeQuantityInDecimal',
    'billingCycles',
    'servicePeriodDays',
    'meteredQuantity',
  ];

}

?>