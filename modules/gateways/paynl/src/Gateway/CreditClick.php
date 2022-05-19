<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

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