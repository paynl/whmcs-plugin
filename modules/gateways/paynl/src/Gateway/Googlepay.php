<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Googlepay extends Gateway
{
    public static function getName()
    {
        return 'Googlepay';
    }

    public static function getPaymentProfileId()
    {
        return 2558;
    }
}