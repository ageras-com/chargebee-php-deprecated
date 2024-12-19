<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceEinvoice extends Model
{
  protected $allowed = [
    'id',
    'referenceNumber',
    'status',
    'message',
  ];

}

?>