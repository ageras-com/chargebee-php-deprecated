<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerReferralUrl extends Model
{
  protected $allowed = [
    'externalCustomerId',
    'referralSharingUrl',
    'createdAt',
    'updatedAt',
    'referralCampaignId',
    'referralAccountId',
    'referralExternalCampaignId',
    'referralSystem',
  ];

}

?>