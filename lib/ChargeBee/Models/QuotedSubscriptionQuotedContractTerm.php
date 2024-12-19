<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class QuotedSubscriptionQuotedContractTerm extends Model
{
  protected $allowed = [
    'contractStart',
    'contractEnd',
    'billingCycle',
    'actionAtTermEnd',
    'totalContractValue',
    'cancellationCutoffPeriod',
  ];

}

?>