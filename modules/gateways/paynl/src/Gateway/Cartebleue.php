<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8-2-17
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Cartebleue extends Gateway
{
    public static function getName()
    {
        return 'Cartebleue';
    }
    public static function getPaymentProfileId()
    {
        return 710;
    }
}