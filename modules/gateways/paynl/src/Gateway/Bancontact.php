<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class Bancontact extends Gateway
{
    public static function getName()
    {
        return 'Bancontact';
    }

    public static function getPaymentProfileId()
    {
        return 436;
    }
}