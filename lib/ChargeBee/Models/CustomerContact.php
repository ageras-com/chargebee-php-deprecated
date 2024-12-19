<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerContact extends Model
{
  protected $allowed = [
    'id',
    'firstName',
    'lastName',
    'email',
    'phone',
    'label',
    'enabled',
    'sendAccountEmail',
    'sendBillingEmail',
  ];

}

?>