<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Eps extends Gateway
{
    public static function getName()
    {
        return 'EPS Uberweisung';
    }

    public static function getPaymentProfileId()
    {
        return 2062;
    }
}