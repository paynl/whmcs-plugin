<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Paysafecard extends Gateway
{
    public static function getName()
    {
        return 'Paysafecard';
    }
    public static function getPaymentProfileId()
    {
        return 553;
    }
}