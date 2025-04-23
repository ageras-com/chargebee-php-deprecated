<?php

namespace ChargeBee\ChargeBee\Models;

use ChargeBee\ChargeBee\Model;

class InvoiceLineItem extends Model
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
    'metered',
    'percentage',
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