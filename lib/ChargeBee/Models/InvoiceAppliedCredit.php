<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceAppliedCredit extends Model
{
  protected $allowed = [
    'cnId',
    'appliedAmount',
    'appliedAt',
    'cnReasonCode',
    'cnCreateReasonCode',
    'cnDate',
    'cnStatus',
  ];

}

?>