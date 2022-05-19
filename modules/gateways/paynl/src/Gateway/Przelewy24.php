<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Przelewy24 extends Gateway
{
    public static function getName()
    {
        return 'Przelewy24';
    }
    public static function getPaymentProfileId()
    {
        return 2151;
    }
}