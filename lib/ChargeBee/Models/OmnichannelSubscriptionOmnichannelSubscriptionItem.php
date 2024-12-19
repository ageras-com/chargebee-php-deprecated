<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class OmnichannelSubscriptionOmnichannelSubscriptionItem extends Model
{
  protected $allowed = [
    'id',
    'idAtSource',
    'status',
    'currentTermStart',
    'currentTermEnd',
    'expiredAt',
    'expirationReason',
    'cancelledAt',
    'cancellationReason',
  ];

}

?>