<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Trustly extends Gateway
{
    public static function getName()
    {
        return 'Trustly';
    }

    public static function getPaymentProfileId()
    {
        return 2718;
    }
}