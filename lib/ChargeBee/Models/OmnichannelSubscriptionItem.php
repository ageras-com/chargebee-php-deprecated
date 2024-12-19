<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class OmnichannelSubscriptionItem extends Model
{

  protected $allowed = [
    'id',
    'itemIdAtSource',
    'status',
    'currentTermStart',
    'currentTermEnd',
    'expiredAt',
    'expirationReason',
    'cancelledAt',
    'cancellationReason',
    'gracePeriodExpiresAt',
    'resourceVersion',
  ];



  # OPERATIONS
  #-----------

 }

?>