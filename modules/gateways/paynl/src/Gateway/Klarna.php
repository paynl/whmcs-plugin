<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Klarna extends Gateway
{
    public static function getName()
    {
        return 'Klarna';
    }
    public static function getPaymentProfileId()
    {
        return 1717;
    }
}