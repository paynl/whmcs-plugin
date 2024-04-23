<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Afterpay extends Gateway
{
    public static function getName()
    {
        return 'Afterpay';
    }

    public static function getPaymentProfileId()
    {
        return 739;
    }
}