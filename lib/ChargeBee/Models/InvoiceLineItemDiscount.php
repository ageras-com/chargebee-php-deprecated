<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceLineItemDiscount extends Model
{
  protected $allowed = [
    'lineItemId',
    'discountType',
    'couponId',
    'entityId',
    'discountAmount',
  ];

}

?>