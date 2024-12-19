<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class NonSubscription extends Model
{

  protected $allowed = [
    'appId',
    'invoiceId',
    'customerId',
    'chargeId',
  ];



  # OPERATIONS
  #-----------

  public static function processReceipt($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("non_subscriptions",$id,"one_time_purchase"), $params, $env, $headers);
  }

 }

?>