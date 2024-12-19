<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerTaxProvidersField extends Model
{
  protected $allowed = [
    'providerName',
    'fieldId',
    'fieldValue',
  ];

}

?>