<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class Address extends Model
{

  protected $allowed = [
    'label',
    'firstName',
    'lastName',
    'email',
    'company',
    'phone',
    'addr',
    'extendedAddr',
    'extendedAddr2',
    'city',
    'stateCode',
    'state',
    'country',
    'zip',
    'validationStatus',
    'subscriptionId',
  ];



  # OPERATIONS
  #-----------

  public static function retrieve($params, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("addresses"), $params, $env, $headers);
  }

  public static function update($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("addresses"), $params, $env, $headers);
  }

 }

?>