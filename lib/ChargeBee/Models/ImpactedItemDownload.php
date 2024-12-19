<?php

namespace ChargeBeeDeprecated\ChargeBee\Models;

use ChargeBeeDeprecated\ChargeBee\Model;

class ImpactedItemDownload extends Model
{
  protected $allowed = [
    'downloadUrl',
    'validTill',
    'mimeType',
  ];

}

?>