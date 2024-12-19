<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class TransactionLinkedPayment extends Model
{
  protected $allowed = [
    'id',
    'status',
    'amount',
    'date',
  ];

}

?>