<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Focum extends Gateway
{
    public static function getName()
    {
        return 'Focum';
    }

    public static function getPaymentProfileId()
    {
        return 1702;
    }
}