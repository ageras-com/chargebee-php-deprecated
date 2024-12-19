<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class InAppSubscription extends Model
{

  protected $allowed = [
    'appId',
    'subscriptionId',
    'customerId',
    'planId',
    'storeStatus',
    'invoiceId',
  ];



  # OPERATIONS
  #-----------

  public static function processReceipt($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("in_app_subscriptions",$id,"process_purchase_command"), $params, $env, $headers);
  }

  public static function importReceipt($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("in_app_subscriptions",$id,"import_receipt"), $params, $env, $headers);
  }

  public static function importSubscription($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("in_app_subscriptions",$id,"import_subscription"), $params, $env, $headers);
  }

  public static function retrieveStoreSubs($id, $params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("in_app_subscriptions",$id,"retrieve"), $params, $env, $headers);
  }

 }

?>