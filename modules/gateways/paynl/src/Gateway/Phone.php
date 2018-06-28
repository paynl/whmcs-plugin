<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 28-6-17
 * Time: 18:30
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Phone extends Gateway
{
    public static function getName()
    {
        return 'Phone';
    }
    public static function getPaymentProfileId()
    {
        return "1600";
    }
}