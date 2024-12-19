<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class TransactionLinkedRefund extends Model
{
  protected $allowed = [
    'txnId',
    'txnStatus',
    'txnDate',
    'txnAmount',
  ];

}

?>