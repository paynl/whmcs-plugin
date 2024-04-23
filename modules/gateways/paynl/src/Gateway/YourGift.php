<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class YourGift extends Gateway
{
    public static function getName()
    {
        return 'YourGift';
    }

    public static function getPaymentProfileId()
    {
        return "1645";
    }
}