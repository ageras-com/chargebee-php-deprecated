<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionChargedItem extends Model
{
  protected $allowed = [
    'itemPriceId',
    'lastChargedAt',
  ];

}

?>