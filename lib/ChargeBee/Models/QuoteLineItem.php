<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuoteLineItem extends Model
{
  protected $allowed = [
    'id',
    'subscriptionId',
    'dateFrom',
    'dateTo',
    'unitAmount',
    'quantity',
    'amount',
    'pricingModel',
    'isTaxed',
    'taxAmount',
    'taxRate',
    'unitAmountInDecimal',
    'quantityInDecimal',
    'amountInDecimal',
    'discountAmount',
    'itemLevelDiscountAmount',
    'usagePercentage',
    'referenceLineItemId',
    'description',
    'entityDescription',
    'entityType',
    'taxExemptReason',
    'entityId',
    'customerId',
  ];

}

?>