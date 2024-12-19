<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceNote extends Model
{
  protected $allowed = [
    'entityType',
    'note',
    'entityId',
  ];

}

?>