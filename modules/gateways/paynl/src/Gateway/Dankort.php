<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Dankort extends Gateway
{
    public static function getName()
    {
        return 'Dankort';
    }

    public static function getPaymentProfileId()
    {
        return 1939;
    }
}