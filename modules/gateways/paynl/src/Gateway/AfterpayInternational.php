<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class AfterpayInternational extends Gateway
{
    public static function getName()
    {
        return 'Afterpay International';
    }

    public static function getPaymentProfileId()
    {
        return 2561;
    }
}