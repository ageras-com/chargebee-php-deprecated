<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class CustomerEntitlement extends Model
{

  protected $allowed = [
    'customerId',
    'subscriptionId',
    'featureId',
    'value',
    'name',
    'isEnabled',
  ];



  # OPERATIONS
  #-----------

  public static function entitlementsForCustomer($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("customers",$id,"customer_entitlements"), $params, $env, $headers);
  }

 }

?>