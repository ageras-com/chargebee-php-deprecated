<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class EntitlementOverride extends Model
{

  protected $allowed = [
    'id',
    'entityId',
    'entityType',
    'featureId',
    'featureName',
    'value',
    'name',
    'expiresAt',
    'effectiveFrom',
    'scheduleStatus',
  ];



  # OPERATIONS
  #-----------

  public static function addEntitlementOverrideForSubscription($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("subscriptions",$id,"entitlement_overrides"), $params, $env, $headers);
  }

  public static function listEntitlementOverrideForSubscription($id, $params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("subscriptions",$id,"entitlement_overrides"), $params, $env, $headers);
  }

 }

?>