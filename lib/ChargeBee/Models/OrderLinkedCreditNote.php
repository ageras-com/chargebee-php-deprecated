<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class OrderLinkedCreditNote extends Model
{
  protected $allowed = [
    'amount',
    'type',
    'id',
    'status',
    'amountAdjusted',
    'amountRefunded',
  ];

}

?>