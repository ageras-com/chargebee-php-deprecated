<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class OrderResentOrder extends Model
{
  protected $allowed = [
    'orderId',
    'reason',
    'amount',
  ];

}

?>