<?php

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class CreditClick extends Gateway
{
    public static function getName()
    {
        return 'CreditClick';
    }
    public static function getPaymentProfileId()
    {
        return 2107;
    }
}