<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CreditNoteAllocation extends Model
{
  protected $allowed = [
    'invoiceId',
    'allocatedAmount',
    'allocatedAt',
    'invoiceDate',
    'invoiceStatus',
  ];

}

?>