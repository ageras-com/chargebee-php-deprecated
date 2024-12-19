<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class InvoiceSiteDetailsAtCreation extends Model
{
  protected $allowed = [
    'timezone',
    'organizationAddress',
  ];

}

?>