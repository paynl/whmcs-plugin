<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 28-6-17
 * Time: 18:30
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Webshopgiftcard extends Gateway
{
    public static function getName()
    {
        return 'Webshopgiftcard';
    }
    public static function getPaymentProfileId()
    {
        return 811;
    }
}