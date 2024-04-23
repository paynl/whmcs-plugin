<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class VisaMastercard extends Gateway
{
    public static function getName()
    {
        return 'Visa/Mastercard';
    }

    public static function getPaymentProfileId()
    {
        return 706;
    }
}