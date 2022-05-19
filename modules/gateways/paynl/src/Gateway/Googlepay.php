<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 15-06-21
 * Time: 18:14
 */

namespace Paynl\Whmcs\Gateway;


use Paynl\Whmcs\Gateway;

class Googlepay extends Gateway
{
    public static function getName()
    {
        return 'Googlepay';
    }
    public static function getPaymentProfileId()
    {
        return 2558;
    }
}