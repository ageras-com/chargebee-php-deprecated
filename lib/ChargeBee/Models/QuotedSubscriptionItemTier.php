<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedSubscriptionItemTier extends Model
{
  protected $allowed = [
    'itemPriceId',
    'startingUnit',
    'endingUnit',
    'price',
    'startingUnitInDecimal',
    'endingUnitInDecimal',
    'priceInDecimal',
    'index',
  ];

}

?>