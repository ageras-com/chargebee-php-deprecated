<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceLineItemTier extends Model
{
  protected $allowed = [
    'lineItemId',
    'startingUnit',
    'endingUnit',
    'quantityUsed',
    'unitAmount',
    'startingUnitInDecimal',
    'endingUnitInDecimal',
    'quantityUsedInDecimal',
    'unitAmountInDecimal',
  ];

}

?>