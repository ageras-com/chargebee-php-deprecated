<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class ItemBundleItem extends Model
{
  protected $allowed = [
    'itemId',
    'itemType',
    'quantity',
    'priceAllocation',
  ];

}

?>