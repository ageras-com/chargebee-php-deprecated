<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionContractTerm extends Model
{
  protected $allowed = [
    'id',
    'status',
    'contractStart',
    'contractEnd',
    'billingCycle',
    'actionAtTermEnd',
    'totalContractValue',
    'totalContractValueBeforeTax',
    'cancellationCutoffPeriod',
    'createdAt',
    'subscriptionId',
    'remainingBillingCycles',
  ];

}

?>