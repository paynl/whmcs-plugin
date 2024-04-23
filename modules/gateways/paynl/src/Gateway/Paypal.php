<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Paypal extends Gateway
{
    public static function getName()
    {
        return 'PayPal';
    }

    public static function getPaymentProfileId()
    {
        return 138;
    }
}