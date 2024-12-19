<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceAdjustmentCreditNote extends Model
{
  protected $allowed = [
    'cnId',
    'cnReasonCode',
    'cnCreateReasonCode',
    'cnDate',
    'cnTotal',
    'cnStatus',
  ];

}

?>