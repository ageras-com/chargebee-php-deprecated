<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class EventWebhook extends Model
{
  protected $allowed = [
    'id',
    'webhookStatus',
  ];

}

?>