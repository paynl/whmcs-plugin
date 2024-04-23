<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Applepay extends Gateway
{
    public static function getName()
    {
        return 'Applepay';
    }

    public static function getPaymentProfileId()
    {
        return 2277;
    }
}