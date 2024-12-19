<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class ItemPriceTaxDetail extends Model
{
  protected $allowed = [
    'taxProfileId',
    'avalaraSaleType',
    'avalaraTransactionType',
    'avalaraServiceType',
    'avalaraTaxCode',
    'hsnCode',
    'taxjarProductCode',
  ];

}

?>