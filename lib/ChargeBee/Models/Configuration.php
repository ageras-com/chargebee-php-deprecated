<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class Configuration extends Model
{

  protected $allowed = [
    'domain',
    'productCatalogVersion',
  ];



  # OPERATIONS
  #-----------

  public static function all($env = null, $headers = array())
  {
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("configurations"), array(), $env, $headers);
  }

 }

?>