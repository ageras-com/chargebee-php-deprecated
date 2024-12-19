<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentVoucherLinkedInvoice extends Model
{
  protected $allowed = [
    'invoiceId',
    'txnId',
    'appliedAt',
  ];

}

?>