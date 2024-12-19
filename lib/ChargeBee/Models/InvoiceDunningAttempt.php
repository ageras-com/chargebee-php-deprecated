<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceDunningAttempt extends Model
{
  protected $allowed = [
    'attempt',
    'transactionId',
    'dunningType',
    'createdAt',
    'txnStatus',
    'txnAmount',
  ];

}

?>