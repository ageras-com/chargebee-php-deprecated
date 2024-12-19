<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CreditNoteLineItemDiscount extends Model
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