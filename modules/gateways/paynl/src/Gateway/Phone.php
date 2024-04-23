<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Phone extends Gateway
{
    public static function getName()
    {
        return 'Phone';
    }

    public static function getPaymentProfileId()
    {
        return "1600";
    }
}