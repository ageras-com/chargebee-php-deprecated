<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceTax extends Model
{
  protected $allowed = [
    'name',
    'amount',
    'description',
  ];

}

?>