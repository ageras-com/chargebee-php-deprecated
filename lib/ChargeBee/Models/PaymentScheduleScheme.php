<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class PaymentScheduleScheme extends Model
{

  protected $allowed = [
    'id',
    'name',
    'description',
    'numberOfSchedules',
    'periodUnit',
    'period',
    'createdAt',
    'resourceVersion',
    'updatedAt',
    'preferredSchedules',
  ];



  # OPERATIONS
  #-----------

  public static function create($params, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("payment_schedule_schemes"), $params, $env, $headers);
  }

  public static function retrieve($id, $env = null, $headers = array())
  {
    return Request::send(Request::GET, Util::encodeURIPath("payment_schedule_schemes",$id), array(), $env, $headers);
  }

  public static function delete($id, $env = null, $headers = array())
  {
    return Request::send(Request::POST, Util::encodeURIPath("payment_schedule_schemes",$id,"delete"), array(), $env, $headers);
  }

 }

?>