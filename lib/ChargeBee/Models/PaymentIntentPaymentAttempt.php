<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentIntentPaymentAttempt extends Model
{
  protected $allowed = [
    'id',
    'status',
    'paymentMethodType',
    'idAtGateway',
    'errorCode',
    'errorText',
    'createdAt',
    'modifiedAt',
    'errorDetail',
  ];

}

?>