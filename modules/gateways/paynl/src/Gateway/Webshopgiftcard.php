<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Webshopgiftcard extends Gateway
{
    public static function getName()
    {
        return 'Webshopgiftcard';
    }

    public static function getPaymentProfileId()
    {
        return 811;
    }
}