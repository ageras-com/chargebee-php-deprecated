<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerParentAccountAccess extends Model
{
  protected $allowed = [
    'portalEditChildSubscriptions',
    'portalDownloadChildInvoices',
    'sendSubscriptionEmails',
    'sendInvoiceEmails',
    'sendPaymentEmails',
  ];

}

?>