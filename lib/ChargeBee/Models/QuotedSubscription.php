<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;
use ChargeBeeDeprecated\ChargeBee\Request;
use ChargeBeeDeprecated\ChargeBee\Util;

class QuotedSubscription extends Model
{

  protected $allowed = [
    'id',
    'planId',
    'planQuantity',
    'planUnitPrice',
    'setupFee',
    'billingPeriod',
    'billingPeriodUnit',
    'startDate',
    'trialEnd',
    'remainingBillingCycles',
    'poNumber',
    'autoCollection',
    'planQuantityInDecimal',
    'planUnitPriceInDecimal',
    'changesScheduledAt',
    'changeOption',
    'contractTermBillingCycleOnRenewal',
    'addons',
    'eventBasedAddons',
    'coupons',
    'subscriptionItems',
    'itemTiers',
    'quotedContractTerm',
  ];



  # OPERATIONS
  #-----------

 }

?>