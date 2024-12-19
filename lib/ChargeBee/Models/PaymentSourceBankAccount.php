<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class PaymentSourceBankAccount extends Model
{
  protected $allowed = [
    'last4',
    'nameOnAccount',
    'firstName',
    'lastName',
    'directDebitScheme',
    'bankName',
    'mandateId',
    'accountType',
    'echeckType',
    'accountHolderType',
    'email',
  ];

}

?>