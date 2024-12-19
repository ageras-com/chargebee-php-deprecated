<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceLinkedOrder extends Model
{
  protected $allowed = [
    'id',
    'documentNumber',
    'status',
    'orderType',
    'referenceId',
    'fulfillmentStatus',
    'batchId',
    'createdAt',
  ];

}

?>