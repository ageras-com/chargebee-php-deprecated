<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class AdvanceInvoiceScheduleFixedIntervalSchedule extends Model
{
  protected $allowed = [
    'endScheduleOn',
    'numberOfOccurrences',
    'daysBeforeRenewal',
    'endDate',
    'createdAt',
    'termsToCharge',
  ];

}

?>