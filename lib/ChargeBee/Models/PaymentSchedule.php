<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class PaymentSchedule extends Model
{

  protected $allowed = [
    'id',
    'schemeId',
    'entityType',
    'entityId',
    'amount',
    'createdAt',
    'resourceVersion',
    'updatedAt',
    'currencyCode',
    'scheduleEntries',
  ];



  # OPERATIONS
  #-----------

 }

?>