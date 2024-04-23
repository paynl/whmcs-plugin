<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Paysafecard extends Gateway
{
    public static function getName()
    {
        return 'Paysafecard';
    }

    public static function getPaymentProfileId()
    {
        return 553;
    }
}