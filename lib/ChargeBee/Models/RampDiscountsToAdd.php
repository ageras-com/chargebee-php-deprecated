<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class RampDiscountsToAdd extends Model
{
  protected $allowed = [
    'id',
    'invoiceName',
    'type',
    'percentage',
    'amount',
    'durationType',
    'period',
    'periodUnit',
    'includedInMrr',
    'applyOn',
    'itemPriceId',
    'createdAt',
  ];

}

?>