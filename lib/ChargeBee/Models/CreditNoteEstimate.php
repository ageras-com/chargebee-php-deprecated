<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class CreditNoteEstimate extends Model
{

  protected $allowed = [
    'referenceInvoiceId',
    'type',
    'priceType',
    'currencyCode',
    'subTotal',
    'total',
    'amountAllocated',
    'amountAvailable',
    'lineItems',
    'discounts',
    'taxes',
    'lineItemTaxes',
    'lineItemDiscounts',
    'lineItemTiers',
    'roundOffAmount',
    'customerId',
  ];



  # OPERATIONS
  #-----------

 }

?>