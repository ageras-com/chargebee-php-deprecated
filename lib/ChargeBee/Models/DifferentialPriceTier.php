<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class DifferentialPriceTier extends Model
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