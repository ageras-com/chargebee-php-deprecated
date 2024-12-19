<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class GiftGiftReceiver extends Model
{
  protected $allowed = [
    'customerId',
    'subscriptionId',
    'firstName',
    'lastName',
    'email',
  ];

}

?>