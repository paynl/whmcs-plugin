<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Afterpay extends Gateway
{
    public static function getName()
    {
        return 'Afterpay';
    }
    public static function getPaymentProfileId()
    {
        return 739;
    }
}