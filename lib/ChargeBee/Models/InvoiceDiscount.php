<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceDiscount extends Model
{
  protected $allowed = [
    'amount',
    'description',
    'entityType',
    'discountType',
    'entityId',
    'couponSetCode',
  ];

}

?>