<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class Token extends Model
{

  protected $allowed = [
    'id',
    'gateway',
    'gatewayAccountId',
    'paymentMethodType',
    'status',
    'idAtVault',
    'vault',
    'ipAddress',
    'resourceVersion',
    'updatedAt',
    'createdAt',
    'expiredAt',
  ];



  # OPERATIONS
  #-----------

 }

?>