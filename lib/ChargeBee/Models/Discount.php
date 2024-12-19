<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class Discount extends Model
{

  protected $allowed = [
    'id',
    'invoiceName',
    'type',
    'percentage',
    'amount',
    'currencyCode',
    'durationType',
    'period',
    'periodUnit',
    'includedInMrr',
    'applyOn',
    'itemPriceId',
    'createdAt',
    'applyTill',
    'appliedCount',
    'couponId',
    'index',
  ];



  # OPERATIONS
  #-----------

 }

?>