<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Overboeking extends Gateway
{
    public static function getName()
    {
        return 'Overboeking';
    }

    public static function getPaymentProfileId()
    {
        return 136;
    }
}