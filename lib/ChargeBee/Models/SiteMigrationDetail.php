<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class SiteMigrationDetail extends Model
{

  protected $allowed = [
    'entityId',
    'otherSiteName',
    'entityIdAtOtherSite',
    'migratedAt',
    'entityType',
    'status',
  ];



  # OPERATIONS
  #-----------

  public static function all($params = array(), $env = null, $headers = array())
  {
    return Request::sendListRequest(Request::GET, Util::encodeURIPath("site_migration_details"), $params, $env, $headers);
  }

 }

?>