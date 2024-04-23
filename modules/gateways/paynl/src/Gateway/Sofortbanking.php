<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Sofortbanking extends Gateway
{
    public static function getName()
    {
        return 'Sofortbanking';
    }

    public static function getPaymentProfileId()
    {
        return 559;
    }
}