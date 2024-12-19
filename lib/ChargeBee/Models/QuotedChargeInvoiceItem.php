<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedChargeInvoiceItem extends Model
{
  protected $allowed = [
    'itemPriceId',
    'quantity',
    'quantityInDecimal',
    'unitPrice',
    'unitPriceInDecimal',
    'servicePeriodDays',
  ];

}

?>