<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Capayable extends Gateway
{
    public static function getName()
    {
        return 'Capayable Achteraf Betalen';
    }

    public static function getPaymentProfileId()
    {
        return 1744;
    }
}