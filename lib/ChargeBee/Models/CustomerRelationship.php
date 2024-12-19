<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerRelationship extends Model
{
  protected $allowed = [
    'parentId',
    'paymentOwnerId',
    'invoiceOwnerId',
  ];

}

?>