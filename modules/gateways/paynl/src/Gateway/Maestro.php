<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Maestro extends Gateway
{
    public static function getName()
    {
        return 'Maestro';
    }

    public static function getPaymentProfileId()
    {
        return 712;
    }
}