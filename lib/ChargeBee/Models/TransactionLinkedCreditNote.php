<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class TransactionLinkedCreditNote extends Model
{
  protected $allowed = [
    'cnId',
    'appliedAmount',
    'appliedAt',
    'cnReasonCode',
    'cnCreateReasonCode',
    'cnDate',
    'cnTotal',
    'cnStatus',
    'cnReferenceInvoiceId',
  ];

}

?>