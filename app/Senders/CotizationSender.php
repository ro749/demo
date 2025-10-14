<?php

namespace App\Senders;

use Ro749\ListingUtils\Sender\CotizationSenderBase;
use App\Mail\CotizationMail;

class CotizationSender extends CotizationSenderBase
{
    public function __construct()
    {
        parent::__construct(
            mail_class: CotizationMail::class
        );
    }

}