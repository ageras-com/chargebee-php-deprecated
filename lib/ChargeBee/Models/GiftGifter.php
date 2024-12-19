<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class GiftGifter extends Model
{
  protected $allowed = [
    'customerId',
    'invoiceId',
    'signature',
    'note',
  ];

}

?>