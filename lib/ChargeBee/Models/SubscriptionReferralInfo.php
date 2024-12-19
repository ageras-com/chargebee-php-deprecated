<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class SubscriptionReferralInfo extends Model
{
  protected $allowed = [
    'referralCode',
    'couponCode',
    'referrerId',
    'externalReferenceId',
    'rewardStatus',
    'referralSystem',
    'accountId',
    'campaignId',
    'externalCampaignId',
    'friendOfferType',
    'referrerRewardType',
    'notifyReferralSystem',
    'destinationUrl',
    'postPurchaseWidgetEnabled',
  ];

}

?>