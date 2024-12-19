<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class ContractTerm extends Model
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



  # OPERATIONS
  #-----------

 }

?>