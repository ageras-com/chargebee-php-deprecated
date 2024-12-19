<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class CustomerChildAccountAccess extends Model
{
  protected $allowed = [
    'portalEditSubscriptions',
    'portalDownloadInvoices',
    'sendSubscriptionEmails',
    'sendInvoiceEmails',
    'sendPaymentEmails',
  ];

}

?>