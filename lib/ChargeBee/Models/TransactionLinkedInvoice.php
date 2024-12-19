<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class TransactionLinkedInvoice extends Model
{
  protected $allowed = [
    'invoiceId',
    'appliedAmount',
    'appliedAt',
    'invoiceDate',
    'invoiceTotal',
    'invoiceStatus',
  ];

}

?>