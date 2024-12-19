<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class BusinessEntity extends Model
{

  protected $allowed = [
    'id',
    'name',
    'status',
    'deleted',
    'createdAt',
    'resourceVersion',
    'updatedAt',
  ];



  # OPERATIONS
  #-----------

  public static function createTransfers($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("business_entities","transfers"), $params, $env, $headers);
  }

  public static function getTransfers($params = array(), $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("business_entities","transfers"), $params, $env, $headers);
  }

 }

?>