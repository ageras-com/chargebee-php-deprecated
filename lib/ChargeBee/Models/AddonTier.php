<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class AddonTier extends Model
{
  protected $allowed = [
    'startingUnit',
    'endingUnit',
    'price',
    'startingUnitInDecimal',
    'endingUnitInDecimal',
    'priceInDecimal',
  ];

}

?>