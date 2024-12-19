<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceLinkedPayment extends Model
{
  protected $allowed = [
    'txnId',
    'appliedAmount',
    'appliedAt',
    'txnStatus',
    'txnDate',
    'txnAmount',
  ];

}

?>