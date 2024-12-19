<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerEntityIdentifier extends Model
{
  protected $allowed = [
    'id',
    'value',
    'scheme',
    'standard',
  ];

}

?>