<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class Purchase extends Model
{

  protected $allowed = [
    'id',
    'customerId',
    'createdAt',
    'modifiedAt',
    'subscriptionIds',
    'invoiceIds',
  ];



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("purchases"), $params, $env, $headers);
  }

  public static function estimate($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("purchases","estimate"), $params, $env, $headers);
  }

 }

?>