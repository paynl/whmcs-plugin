<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Mybank extends Gateway
{
    public static function getName()
    {
        return 'Mybank';
    }

    public static function getPaymentProfileId()
    {
        return 1588;
    }
}