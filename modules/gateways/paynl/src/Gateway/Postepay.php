<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Postepay extends Gateway
{
    public static function getName()
    {
        return 'Postepay';
    }

    public static function getPaymentProfileId()
    {
        return 707;
    }
}