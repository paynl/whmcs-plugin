<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Giropay extends Gateway
{
    public static function getName()
    {
        return 'Giropay';
    }

    public static function getPaymentProfileId()
    {
        return 694;
    }
}