<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Cartebleue extends Gateway
{
    public static function getName()
    {
        return 'Cartebleue';
    }

    public static function getPaymentProfileId()
    {
        return 710;
    }
}