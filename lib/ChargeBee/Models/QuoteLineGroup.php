<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class QuoteLineGroup extends Model
{

  protected $allowed = [
    'version',
    'id',
    'subTotal',
    'total',
    'creditsApplied',
    'amountPaid',
    'amountDue',
    'chargeEvent',
    'billingCycleNumber',
    'lineItems',
    'discounts',
    'lineItemDiscounts',
    'taxes',
    'lineItemTaxes',
  ];



  # OPERATIONS
  #-----------

 }

?>