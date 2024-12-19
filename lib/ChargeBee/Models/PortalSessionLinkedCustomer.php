<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PortalSessionLinkedCustomer extends Model
{
  protected $allowed = [
    'customerId',
    'email',
    'hasBillingAddress',
    'hasPaymentMethod',
    'hasActiveSubscription',
  ];

}

?>