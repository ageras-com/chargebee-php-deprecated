<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuoteTax extends Model
{
  protected $allowed = [
    'name',
    'amount',
    'description',
  ];

}

?>