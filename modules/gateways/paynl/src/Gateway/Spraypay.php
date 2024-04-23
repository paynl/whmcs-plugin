<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Spraypay extends Gateway
{
    public static function getName()
    {
        return 'SprayPay';
    }

    public static function getPaymentProfileId()
    {
        return 1987;
    }
}