<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class InvoiceEstimate extends Model
{

  protected $allowed = [
    'recurring',
    'priceType',
    'currencyCode',
    'subTotal',
    'total',
    'creditsApplied',
    'amountPaid',
    'amountDue',
    'lineItems',
    'discounts',
    'taxes',
    'lineItemTaxes',
    'lineItemTiers',
    'lineItemDiscounts',
    'roundOffAmount',
    'customerId',
  ];



  # OPERATIONS
  #-----------

 }

?>