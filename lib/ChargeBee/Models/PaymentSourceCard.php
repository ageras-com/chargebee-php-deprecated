<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourceCard extends Model
{
  protected $allowed = [
    'firstName',
    'lastName',
    'iin',
    'last4',
    'brand',
    'fundingType',
    'expiryMonth',
    'expiryYear',
    'billingAddr1',
    'billingAddr2',
    'billingCity',
    'billingStateCode',
    'billingState',
    'billingCountry',
    'billingZip',
    'maskedNumber',
  ];

}

?>