<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class OmnichannelSubscriptionOmnichannelTransaction extends Model
{
  protected $allowed = [
    'id',
    'idAtSource',
    'appId',
    'priceCurrency',
    'priceUnits',
    'priceNanos',
    'type',
    'transactedAt',
    'createdAt',
    'resourceVersion',
  ];

}

?>