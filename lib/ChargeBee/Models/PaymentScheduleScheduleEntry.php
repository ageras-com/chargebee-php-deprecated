<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentScheduleScheduleEntry extends Model
{
  protected $allowed = [
    'id',
    'date',
    'amount',
    'status',
  ];

}

?>