<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Ideal extends Gateway
{
    public static function getName()
    {
        return 'iDEAL';
    }

    public static function getPaymentProfileId()
    {
        return 10;
    }
}