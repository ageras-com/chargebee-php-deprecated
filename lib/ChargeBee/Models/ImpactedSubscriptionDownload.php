<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class ImpactedSubscriptionDownload extends Model
{
  protected $allowed = [
    'downloadUrl',
    'validTill',
    'mimeType',
  ];

}

?>