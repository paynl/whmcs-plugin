<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Trustly extends Gateway
{
    public static function getName()
    {
        return 'Trustly';
    }
    public static function getPaymentProfileId()
    {
        return 2718;
    }
}