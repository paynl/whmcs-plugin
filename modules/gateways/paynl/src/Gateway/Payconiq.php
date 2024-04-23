<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Payconiq extends Gateway
{
    public static function getName()
    {
        return 'Payconiq';
    }

    public static function getPaymentProfileId()
    {
        return 2379;
    }
}