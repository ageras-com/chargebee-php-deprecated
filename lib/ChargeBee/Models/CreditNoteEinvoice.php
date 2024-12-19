<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CreditNoteEinvoice extends Model
{
  protected $allowed = [
    'id',
    'referenceNumber',
    'status',
    'message',
  ];

}

?>