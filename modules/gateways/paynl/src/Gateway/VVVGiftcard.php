<?php

namespace Paynl\Whmcs\Gateway;

use Paynl\Whmcs\Gateway;

class VVVGiftcard extends Gateway
{
    public static function getName()
    {
        return 'VVVGiftcard';
    }

    public static function getPaymentProfileId()
    {
        return 1714;
    }
}